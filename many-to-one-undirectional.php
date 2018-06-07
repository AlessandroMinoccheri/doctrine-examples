<?php

/** @Entity */
class Post
{
    /**
     * @ManyToOne(targetEntity="User")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;
}

/** @Entity */
class User
{
}

/*
CREATE TABLE Post (
    id INT AUTO_INCREMENT NOT NULL,
    user_id INT DEFAULT NULL,
    PRIMARY KEY(id)
) ENGINE = InnoDB;

CREATE TABLE User (
    id INT AUTO_INCREMENT NOT NULL,
    PRIMARY KEY(id)
) ENGINE = InnoDB;

ALTER TABLE Post ADD FOREIGN KEY (user_id) REFERENCES Post(id);

 */