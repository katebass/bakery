<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Order;

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

        $this->products = $this->products->implode('title', ', ');
        $this->quantities = implode(', ', $this->quantities);
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Получен новый заказ.')
                    ->line("Вы получили заказ от {$this->order->customer_name} :")
                    ->line($this->products)
                    ->line(" В количестве: {$this->quantities}")
                    ->line("email клиента: {$this->order->customer_email}")
                    ->line("номер клиента: {$this->order->customer_phone}");
    }
}