<?php

class Bird extends DatabaseObject {
  static protected $table_name = 'birds';
  static protected $db_columns =['id', 'common_name', 'habitat', 'food', 'nest_placement', 'behavior', 'conservation_id', 'backyard_tips'];

  public $id;
  public $common_name;
  public $habitat;
  public $food;
  public $nest_placement;
  public $behavior;
  public $conservation_id;
  public $backyard_tips;
  
  public const CONSERVATION = [
    1 => 'Low',
    2 => 'Moderate',
    3 => 'High',
    4 => 'Extreme',
  ];

  public function __construct($args=[]) {
    $this->common_name = $args['common_name'] ?? '';
    $this->habitat = $args['habitat'] ?? '';
    $this->food = $args['food'] ?? '';
    $this->nest_placement = $args['nest_placement'] ?? '';
    $this->behavior = $args['behavior'] ?? '';
    $this->conservation_id = $args['conservation_id'] ?? '';
    $this->backyard_tips = $args['backyard_tips'] ?? '';
  }
  



  public function conservationLevel($conservation_id) {
    if($this->conservation_id > 0) {
      return self::CONSERVATION[$this->conservation_id];
    } else {
      return "Unknown";
    }
  }

}

?>
