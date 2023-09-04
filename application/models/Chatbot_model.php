<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'third_party/ChatterBot/chatterbot-api.php';

class Chatbot_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function get_response($message) {
    $factory = new ChatterBotFactory();

    // menggunakan CleverBot sebagai model AI
    $bot = $factory->create(ChatterBotType::CLEVERBOT);

    // membuat instance bot
    $bot = $bot->create();

    // chat dengan bot
    $response = $bot->think($message);

    return $response;
  }
}
