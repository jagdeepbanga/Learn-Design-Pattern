<?php

namespace App\Weather\Contracts;

interface SubjectInterface
{
    public function registerObserver(ObserverInterface $observer): bool;

    public function removeObserver(ObserverInterface $observer): bool;

    public function notifyObserver(): void;
}
