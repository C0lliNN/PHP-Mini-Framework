<?php

namespace App\Models;

class Todo implements \JsonSerializable {
  private string $title;
  private string $description;

  public function __construct(string $title, string $description)
  {
    $this->title = $title;
    $this->description = $description;
  }

  public function getTitle(): string {
    return $this->title;
  }

  public function getDescription(): string {
    return $this->description;
  }

  public function jsonSerialize(): array {
    return get_object_vars($this);
  }
}