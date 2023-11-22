<?php

class Position implements JsonSerializable {

    private $id; // PK -> SMALLINT(4)
    private $name; // VARCHAR(50)

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function jsonSerialize(): array {
        return get_object_vars($this);
    }
}
