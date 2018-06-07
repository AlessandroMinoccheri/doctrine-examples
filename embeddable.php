<?php

/** @Entity */
class Order
{
    /** @Embedded(class = "Shipment", columnPrefix = "shipment_") */
    private $shipment;
}

public function __construct()
{
    /*
    In case all fields in the embeddable are nullable, 
    you might want to initialize the embeddable, 
    to avoid getting a null value instead of the embedded object.
     */
    $this->shipment = new Shipment();
}

/** @Embeddable */
class Shipment
{
    /** @Column(type = "string") */
    private $street;

    /** @Column(type = "string") */
    private $postalCode;

    /** @Column(type = "string") */
    private $city;

    /** @Column(type = "string") */
    private $country;
}

/*
SELECT o FROM Order o WHERE o.shipment.city = :myCity
 */