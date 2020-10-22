<?php


class LinkedList
{
    protected $firstNode;
    protected $lastNode;

    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
    }

    public function insertFirstNode($data)
    {
        $node = new Node($data);
        $node->link = $this->firstNode;
        $this->firstNode = $node;

        if (!$this->lastNode) {
            $this->lastNode = $node;
        }
    }

    public function insertLastNode($data)
    {
        $node = new Node($data);
        if (!$this->firstNode) {
            $this->insertFirstNode($data);
        } else {
            $this->lastNode->link = $node;
            $this->lastNode = $node;
        }

    }

    /**
     * @return null
     */
    public function getFirstNode()
    {
        return $this->firstNode;
    }

    /**
     * @return null
     */
    public function getLastNode()
    {
        return $this->lastNode;
    }

    public function insert($index, $data)
    {

    }

    public function remove($index)
    {

    }
}