<?php

/** @Entity */
class Cart
{
    /**
     * One Cart has One Shipment.
     * @OneToOne(targetEntity="Shipment")
     * @JoinColumn(name="shipment_id", referencedColumnName="id")
     */
    private $shipment;

    // ...
}

/** @Entity */
class Shipment
{
}

/*
CREATE TABLE Cart (
    id INT AUTO_INCREMENT NOT NULL,
    shipment_id INT DEFAULT NULL,
    UNIQUE INDEX UNIQ_6FBC94267FE4B2B (shipment_id),
    PRIMARY KEY(id)
) ENGINE = InnoDB;
CREATE TABLE Shipment (
    id INT AUTO_INCREMENT NOT NULL,
    PRIMARY KEY(id)
) ENGINE = InnoDB;
ALTER TABLE Cart ADD FOREIGN KEY (shipment_id) REFERENCES Shipment(id);
 */