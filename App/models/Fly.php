<?php

namespace App\models;

class Fly
{
    private int $id;
    private string $date;
    private string $location;
    private int $altitude_from;
    private int $altitude_to;
    private int $time;
    private ?string $comment;


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @param string $location
     */
    public function setLocation(string $location): void
    {
        $this->location = $location;
    }

    /**
     * @return int
     */
    public function getAltitudeFrom(): int
    {
        return $this->altitude_from;
    }

    /**
     * @param int $altitude_from
     */
    public function setAltitudeFrom(int $altitude_from): void
    {
        $this->altitude_from = $altitude_from;
    }

    /**
     * @return int
     */
    public function getAltitudeTo(): int
    {
        return $this->altitude_to;
    }

    /**
     * @param int $altitude_to
     */
    public function setAltitudeTo(int $altitude_to): void
    {
        $this->altitude_to = $altitude_to;
    }

    /**
     * @return int
     */
    public function getTime(): int
    {
        return $this->time;
    }

    /**
     * @param int $time
     */
    public function setTime(int $time): void
    {
        $this->time = $time;
    }

    /**
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * @param string|null $comment
     */
    public function setComment(?string $comment): void
    {
        $this->comment = $comment;
    }


}