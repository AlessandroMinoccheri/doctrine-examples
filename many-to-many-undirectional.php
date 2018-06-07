<?php

/** @Entity */
class User
{
    // ...

    /**
     * Many Users have Many Tasks.
     * @ManyToMany(targetEntity="Task")
     * @JoinTable(name="users_tasks",
     *      joinColumns={@JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="task_id", referencedColumnName="id")}
     *      )
     */
    private $tasks;

    // ...

    public function __construct() {
        $this->tasks = new \Doctrine\Common\Collections\ArrayCollection();
    }
}

/** @Entity */
class Task
{
    // ...
}

/*
CREATE TABLE User (
    id INT AUTO_INCREMENT NOT NULL,
    PRIMARY KEY(id)
) ENGINE = InnoDB;
CREATE TABLE users_tasks (
    user_id INT NOT NULL,
    task_id INT NOT NULL,
    PRIMARY KEY(user_id, task_id)
) ENGINE = InnoDB;
CREATE TABLE Task (
    id INT AUTO_INCREMENT NOT NULL,
    PRIMARY KEY(id)
) ENGINE = InnoDB;
ALTER TABLE users_tasks ADD FOREIGN KEY (user_id) REFERENCES User(id);
ALTER TABLE users_tasks ADD FOREIGN KEY (task_id) REFERENCES Task(id);
 */