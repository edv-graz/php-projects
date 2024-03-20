<?php
// generate Card-Deck as Array
$cardDeck = [
	[2, 3, 4, 5, 6, 7, 8, 9, 10, 10, 10, [1, 11]],
	[2, 3, 4, 5, 6, 7, 8, 9, 10, 10, 10, [1, 11]],
	[2, 3, 4, 5, 6, 7, 8, 9, 10, 10, 10, [1, 11]],
	[2, 3, 4, 5, 6, 7, 8, 9, 10, 10, 10, [1, 11]]
];
function getRandomCard(array &$cards): array
{
	$random_num = rand(0, 3);

	return array_splice($cards[$random_num], rand(0, (count($cards[$random_num]) - 1)), 1);
}

function dealCards(): array
{
	global $cardDeck;
	$check1 = getRandomCard($cardDeck);
	$check2 = getRandomCard($cardDeck);
	if (is_array($check1[0])) {
		$check1[0] = $check1[0][rand(0, 1)];
	}
	if (is_array($check2[0])) {
		$check2[0] = $check2[0][rand(0, 1)];
	}

	[$cards[]] = $check1;
	[$cards[]] = $check2;

	return $cards;
}


function whoWon($p_cards, $c_cards): int
{
	[$p_card1, $p_card2] = $p_cards;
	[$c_card1, $c_card2] = $c_cards;
	$c_sum = 21 - ($c_card1 + $c_card2);
	$p_sum = 21 - ($p_card1 + $p_card2);

	return($c_sum > $p_sum) ? 1 : -1;
}

function game(): string
{
	$round_counter = 0;
	$player_points = 0;
	$dealer_points = 0;
	while ($round_counter < 5) {
		$player_cards = dealCards();
		$dealer_cards = dealCards();
		$who_won = whoWon($player_cards, $dealer_cards);
		($who_won > 0) ? $player_points++ : $dealer_points++;
		echo "Player: $player_points vs. Dealer: $dealer_points";
		echo '<br>';
		$round_counter++;
	}
	echo '<hr>';

	return($player_points > $dealer_points) ? 'Spieler:in hat gewonnen' : 'Dealer:in hat gewonnen';
}

echo game();

