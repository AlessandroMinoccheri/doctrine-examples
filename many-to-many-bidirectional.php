<?php
/** @Entity */
class User
{
    // ...

    /**
     * Many Users have Many Tasks.
     * @ManyToMany(targetEntity="Task", inversedBy="users")
     * @JoinTable(name="users_tasks")
     */
    private $tasks;

    public function __construct() {
        $this->tasks = new \Doctrine\Common\Collections\ArrayCollection();
    }

    // ...
}

/** @Entity */
class Task
{
    // ...
    /**
     * Many Tasks have Many Users.
     * @ManyToMany(targetEntity="User", mappedBy="tasks")
     */
    private $users;

    public function __construct() {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    // ...
}