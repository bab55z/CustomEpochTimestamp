class timestamp {

  /**
   * returns a timestamp with custom epoch, to get shorter unique timestamp
   */
   
  public function __invoke() : int {
    $customStartEpoch = strtotime('2020-01-01 00:00:00'); // custom epoch
    $now = strtotime(date('Y-m-d H:i:s'));
    return (int) ($now - $customStartEpoch);
  }
  
}
