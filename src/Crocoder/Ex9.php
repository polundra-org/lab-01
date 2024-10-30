<?php

namespace Telema\Crocoder;

use Telema\Math;

class Ex9
{	
	public const ITEMS = [
		[
			'name' => 'Alice',
			'scores' => [90, 85, 92] 
		],
		[
			'name' => 'Bob',
			'scores' => [75, 80, 85] 
		],
		[
			'name' => 'Charlie',
			'scores' => [90, 95, 85] 
		],
		[
			'name' => 'Jack',
			'scores' => [100, 100, 100] 
		],
	];

	public const AVARAGE_SCORE = 90;

	public function __invoke() {
		$result = [];

		foreach (self::ITEMS as $item) {

			$sum = array_sum($item['scores']);
			$count = count($item['scores']);
			$avg = Math::avg($sum, $count);
			
			if ($avg > self::AVARAGE_SCORE) {
				$result[] = [
					'name' => $item['name'],
					'average' => $avg
				];
			} 
		}
		
		return $result;
	}
}
