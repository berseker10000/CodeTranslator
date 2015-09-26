<?php

interface container {
    public function add($item);
    public function find($item);
    public function update($item);
    public function delete($item);
    public function load($param);
}