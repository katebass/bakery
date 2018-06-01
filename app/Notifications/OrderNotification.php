<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class OrderNotification extends Notification
{
    use Queueable;

    public $products;
    public $order;
    public $quantities;

    public function __construct(Order $order)
    {
        $this->order = $order;
        $this->products = $order->items;
        $this->quantities = [];

        foreach ($this->products as $product) {
            $this->quantities[] = $product->pivot->quantity;
        }

        $this->products = $this->products->implode('name', ', ');
        $this->quantities = implode(',', $this->quantities);
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('order received')
                    ->from('shop')
                    ->line("You have received an order number #{$this->order->id} :")
                    ->line($this->products)
                    ->line(" in respective quantities: #{$this->count}")
                    ->line("Customer email: #{$this->order->customer_email}")
                    ->line("Customer email: #{$this->order->customer_phone}");
    }
}