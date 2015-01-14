<?php
namespace Mantisbt\Result\Issue;

class Status
{
    /**
     * @var int The status ID from MantisBT
     */
    protected $id;
    /**
     * @var string The status name from MantisBT
     */
    protected $name;

    /**
     * Constructor for the status of an issue
     *
     * @param null|\stdClass|int $id
     * @param null|string $name
     */
    function __construct($id = null, $name = null)
    {
        if (null !== $id) {
            if ($id instanceof \stdClass) {
                $this->setId($id->id)
                    ->setName($id->name);
            } else {
                $this->setId($id);
            }
        }
        if (null !== $name) {
            $this->setName($name);
        }
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Status
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Status
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
