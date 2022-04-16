<?php

namespace Tree;

/*
примерное дерево, которое хотелось бы видеть для функции f(x,y)=(cos(x)+y)/(x-sin(y))
          '/'
        /     \
      '+'     '-'
     /  \     /  \
 'cos'   y   x  'sin'
 /                 \
x                   y
*/

class Node
{
    protected $dataFunc; //функция или координата
    protected $left = NULL;
    protected $right = NULL;
    protected $level;

    public function __construct(string $dataFunc = NULL, int $level = 0)
    {
        $this->dataFunc = $dataFunc;
        $this->level = $level;
    }

    public function addChildren($left, $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

}

class Tree extends Node
{
    private $root;

    public function __construct()
    {
        $this->root = NULL;
    }

    public function addNode ($data)
    {
        if ($this->root == NULL) 
        {
            $this->root = new Node($dataFunc);
        }
        else
        {
            $currentNode = $this->$root;
            while(true)
            {

            }
        }
    }

}