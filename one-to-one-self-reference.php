<?php

/** @Entity */
class Category
{
    // ...

    /**
     * One Category has One Category.
     * @OneToOne(targetEntity="Category")
     * @JoinColumn(name="parent_id", referencedColumnName="id")
     */
    private $parent;

    // ...
}

/*
CREATE TABLE Category (
    id INT AUTO_INCREMENT NOT NULL,
    parent_id INT DEFAULT NULL,
    PRIMARY KEY(id)
) ENGINE = InnoDB;
ALTER TABLE Category ADD FOREIGN KEY (parent_id) REFERENCES Category(id);
 */