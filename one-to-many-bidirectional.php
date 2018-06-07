<?php

use Doctrine\Common\Collections\ArrayCollection;

/** @Entity */
class Product
{
    // ...
    /**
     * One Product has Many Tags.
     * @OneToMany(targetEntity="Tag", mappedBy="product")
     */
    private $tags;
    // ...

    public function __construct() {
        $this->tags = new ArrayCollection();
    }
}

/** @Entity */
class Tag
{
    // ...
    /**
     * Many Tags have One Product.
     * @ManyToOne(targetEntity="Product", inversedBy="tags")
     * @JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $product;
}

/*
CREATE TABLE Product (
    id INT AUTO_INCREMENT NOT NULL,
    PRIMARY KEY(id)
) ENGINE = InnoDB;
CREATE TABLE Tag (
    id INT AUTO_INCREMENT NOT NULL,
    product_id INT DEFAULT NULL,
    PRIMARY KEY(id)
) ENGINE = InnoDB;
ALTER TABLE Tag ADD FOREIGN KEY (product_id) REFERENCES Product(id);
*/