<?php
// generate Card-Deck as Array
$cardDeck = [
	[2, 3, 4, 5, 6, 7, 8, 9, 10, 10, 10, [1, 11]],
	[2, 3, 4, 5, 6, 7, 8, 9, 10, 10, 10, [1, 11]],
	[2, 3, 4, 5, 6, 7, 8, 9, 10, 10, 10, [1, 11]],
	[2, 3, 4, 5, 6, 7, 8, 9, 10, 10, 10, [1, 11]]
];
function getRandomCard(array &$cards): array {
    $randomStackIndex = array_rand($cards);
    $randomStack = &$cards[$randomStackIndex];
    
    $randomCardIndex = array_rand($randomStack);
    $randomCard = $randomStack[$randomCardIndex];

    if (is_array($randomCard)) {
        array_splice($randomStack, $randomCardIndex, 1);
        return $randomCard;
    }

    array_splice($randomStack, $randomCardIndex, 1);

    return [$randomCard];
}

function dealCards(array &$cardDeck, int $numCards = 2): array {
    $cards = [];
    for ($i = 0; $i < $numCards; $i++) {
        $check = getRandomCard($cardDeck);
        if (is_array($check[0])) {
            $check[0] = $check[0][rand(0, 1)];
        }
        $cards[] = $check[0];
    }
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

function game(&$cardDeck): string
{
	$round_counter = 0;
	$player_points = 0;
	$dealer_points = 0;
	while ($round_counter < 5) {
		$player_cards = dealCards($cardDeck);
		$dealer_cards = dealCards($cardDeck);
		$who_won = whoWon($player_cards, $dealer_cards);
		($who_won > 0) ? $player_points++ : $dealer_points++;
		echo "Player: $player_points vs. Dealer: $dealer_points";
		echo '<br>';
		$round_counter++;
	}
	echo '<hr>';

	return($player_points > $dealer_points) ? 'Spieler:in hat gewonnen' : 'Dealer:in hat gewonnen';
}

echo game($cardDeck);

