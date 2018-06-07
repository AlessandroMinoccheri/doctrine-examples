<?php

/** @Entity */
class User
{
    // ...

    /**
     * One User has One Group.
     * @OneToOne(targetEntity="Group", mappedBy="user")
     */
    private $group;

    // ...
}

/** @Entity */
class Group
{
    // ...

    /**
     * One Group has One User.
     * @OneToOne(targetEntity="User", inversedBy="group")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;
}

/*
CREATE TABLE User (
    id INT AUTO_INCREMENT NOT NULL,
    group_id INT DEFAULT NULL,
    PRIMARY KEY(id)
) ENGINE = InnoDB;
CREATE TABLE Group (
    id INT AUTO_INCREMENT NOT NULL,
    PRIMARY KEY(id)
) ENGINE = InnoDB;
ALTER TABLE User ADD FOREIGN KEY (group_id) REFERENCES Group(id);
*/