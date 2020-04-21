-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2020 at 06:39 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eternal_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `id` int(11) NOT NULL,
  `card_name` varchar(50) NOT NULL,
  `card_set` int(1) NOT NULL,
  `card_rarity` varchar(15) NOT NULL,
  `card_cost` varchar(3) DEFAULT NULL,
  `card_attack` varchar(3) DEFAULT NULL,
  `card_health` varchar(3) DEFAULT NULL,
  `card_type` varchar(20) NOT NULL,
  `card_faction` varchar(6) DEFAULT NULL,
  `card_text` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

INSERT INTO `card` (`id`, `card_name`, `card_set`, `card_rarity`, `card_cost`, `card_attack`, `card_health`, `card_type`, `card_faction`, `card_text`) VALUES
(2, 'Flame Blast', 1, 'uncommon', '1+', NULL, NULL, 'Spell', 'FFF', 'Deal 1 damage. Spend your remaining power to increase the damage dealt by that much.'),
(3, 'Charchain Flail', 1, 'rare', '1+', '+1', '+1', 'Attachment', 'FF', 'Summon: Spend your remaining power to give Charchain Flail that much atk.'),
(4, 'Heavy Axe', 1, 'common', '1', '+2', '+1', 'Attachment', 'F', NULL),
(5, 'Grenadin Drone', 1, 'common', '1', '1', '1', 'Unit', 'F', 'Summon: Play a 1/1 Grenadin.'),
(6, 'Light the Fuse', 1, 'legendary', '1', NULL, NULL, 'Spell', 'F', 'Put five Firebombs into the enemy deck.'),
(8, 'Torch', 1, 'common', '1', NULL, NULL, 'Spell', 'F', 'Deal 3 damage to a unit or player.'),
(9, 'Frontier Jito', 1, 'rare', '2', '1', '1', 'Unit', 'F', 'Charge Your units that cost 1 or less have Charge.'),
(10, 'Temper', 1, 'common', '1', NULL, NULL, 'Spell', 'F', 'Deal 1 damage. The top unit or weapon of your deck gets +1/+1.'),
(11, 'Ruthless Stranger', 1, 'common', '1', '1', '1', 'Unit', 'F', 'Strangers have +1 atk.'),
(12, 'Ticking Grenadin', 1, 'common', '1', '1', '1', 'Unit', 'F', 'Entomb: Deal 3 damage to the enemy player.'),
(13, 'Oni Ronin', 1, 'common', '1', '2', '1', 'Unit', 'F', 'Warcry'),
(14, 'Warhelm', 1, 'uncommon', '1', '+1', '+0', 'Attachment', 'F', 'Charge, Warcry'),
(15, 'Ruin', 1, 'common', '1', NULL, NULL, 'Spell', 'F', 'Kill an enemy attachment.'),
(16, 'Pyroknight', 1, 'rare', '1', '2', '1', 'Unit', 'F', 'Overwhelm Ultimate: Pay 6 to give Pyroknight +4/+4.'),
(17, 'Rampage', 1, 'common', '2', NULL, NULL, 'Spell', 'F', 'Give a unit +3/+1 and Overwhelm this turn.'),
(18, 'Song of War', 1, 'rare', '2', NULL, NULL, 'Spell', 'F', 'Your units get Warcry.'),
(19, 'Brazen Daredevil', 1, 'rare', '2', '1', '1', 'Unit', 'F', 'Reckless When Brazen Daredevil attacks, she deals her atk in damage to a random enemy.'),
(20, 'Rakano Outlaw', 1, 'uncommon', '2', '2', '2', 'Unit', 'F', 'Quickdraw, Warcry'),
(21, 'Pyre Adept', 1, 'common', '2', '3', '1', 'Unit', 'F', NULL),
(22, 'Bladekin Apprentice', 1, 'uncommon', '2', '1', '1', 'Unit', 'F', 'Quickdraw When Bladekin Apprentice attacks, she gets +1 atk.'),
(23, 'Ornate Katana', 1, 'common', '2', '+2', '+0', 'Attachment', 'F', 'Summon: Draw a card.'),
(25, 'Piercing Shot', 1, 'uncommon', '2', NULL, NULL, 'Spell', 'F', 'Deal 2 damage to an enemy unit and 2 damage to the enemy player.'),
(26, 'Shogun\'s Scepter', 1, 'rare', '3', '+2', '+1', 'Attachment', 'FF', 'Warcry Summon: Play a 2/1 Oni Ronin with Warcry.'),
(27, 'Rakano Flagbearer', 1, 'uncommon', '3', '1', '1', 'Unit', 'F', 'Warcry 2'),
(28, 'Burn Out', 1, 'uncommon', '4', NULL, NULL, 'Spell', 'F', 'Sacrifice a unit to deal 5 damage to an enemy.'),
(29, 'Assembly Line', 1, 'uncommon', '3', NULL, NULL, 'Spell', 'F', 'Play three 1/1 Grenadin.'),
(30, 'Rebel Sharpshooter', 1, 'common', '3', '3', '3', 'Unit', 'F', 'Rebel Sharpshooter has Quickdraw while she has 4 atk or more.'),
(31, 'Granite Acolyte', 1, 'common', '3', '2', '1', 'Unit', 'F', 'Summon: Play a +2 atk Iron Sword on one of your units.'),
(32, 'Oni Quartermaster', 1, 'uncommon', '3', '2', '2', 'Unit', 'F', 'When you play a weapon, draw a card.'),
(33, 'Rally', 1, 'common', '3', NULL, NULL, 'Spell', 'F', 'Your units get +2 atk this turn.'),
(34, 'Censari Brigand', 1, 'rare', '3', '2', '2', 'Unit', 'FF', 'Charge Deals double damage to players.'),
(35, 'Centaur Outrider', 1, 'common', '4', '5', '2', 'Unit', 'F', NULL),
(36, 'Guerrilla Fighter', 1, 'common', '4', '3', '2', 'Unit', 'F', 'Warcry Summon: Exhaust an enemy unit.'),
(37, 'Recogulator', 1, 'common', '4', '2', '2', 'Unit', 'F', 'Entomb: Play two 1/1 Grenadin.'),
(38, 'Steelfang Chakram', 1, 'rare', '4', '+4', '+0', 'Attachment', 'F', 'Entomb: Draw Steelfang Chakram from your void.'),
(39, 'Cloud of Ash', 1, 'uncommon', '4', NULL, NULL, 'Spell', 'F', 'Exhaust all enemy units.'),
(40, 'Furnace Mage', 1, 'uncommon', '4', '4', '3', 'Unit', 'FF', 'Summon: Kill an enemy attachment.'),
(41, 'Magma Javelin', 1, 'common', '4', '+4', '+1', 'Attachment', 'F', NULL),
(42, 'Outlands Sniper', 1, 'uncommon', '4', '2', '2', 'Unit', 'FF', 'Summon: Deal 2 damage.'),
(43, 'Rebel Illuminator', 1, 'uncommon', '4', '3', '1', 'Unit', 'F', 'Entomb: Create and draw a Torch.'),
(44, 'Oni Striker', 1, 'common', '5', '3', '2', 'Unit', 'F', 'Charge, Quickdraw'),
(45, 'Infernus', 1, 'rare', '5', '5', '5', 'Unit', 'F', 'Charge, Overwhelm Free on your first turn. At the end of your turn, sacrifice Infernus.'),
(46, 'Calderan Gunsmith', 1, 'uncommon', '5', '3', '2', 'Unit', 'F', 'Summon: Each of your units deals 1 damage to the enemy player.'),
(47, 'Soulfire Drake', 1, 'legendary', '6', '5', '2', 'Unit', 'FFF', 'Flying, Charge Entomb: Each unit in your deck randomly gets Flying or Charge.'),
(48, 'Obliterate', 1, 'rare', '5', NULL, NULL, 'Spell', 'FF', 'Overwhelm Deal 6 damage to a unit or player.'),
(49, 'Dusthoof Brawler', 1, 'common', '5', '5', '3', 'Unit', 'F', 'Overwhelm'),
(50, 'Centaur Raidleader', 1, 'uncommon', '5', '4', '4', 'Unit', 'FF', 'Charge Summon: The top unit of your deck gets Charge.'),
(51, 'Shogun of the Wastes', 1, 'legendary', '5', '3', '3', 'Unit', 'FF', 'Double Damage Summon: Your units deal Double Damage this turn.'),
(52, 'Stonescar Maul', 1, 'uncommon', '6', '+6', '+3', 'Attachment', 'FF', 'Overwhelm'),
(53, 'Frontline Cyclops', 1, 'uncommon', '6', '6', '6', 'Unit', 'F', 'Reckless, Warcry'),
(54, 'Worldpyre Phoenix', 1, 'rare', '6', '5', '5', 'Unit', 'FF', 'Flying Entomb: Draw Worldpyre Phoenix from your void with +3/+3 and cost increased by 3.'),
(55, 'Hellfire Rifle', 1, 'common', '6', '+3', '+3', 'Attachment', 'FF', 'Summon: The wielder deals 3 damage to the enemy player.'),
(56, 'General Izalio', 1, 'rare', '6', '6', '4', 'Unit', 'FF', 'Quickdraw Your other units have +2 atk.'),
(58, 'Crowd Favorite', 1, 'uncommon', '6', '3', '4', 'Unit', 'F', 'Summon: Choose a weapon with cost 3 or less from your deck and play it.'),
(59, 'Claw of the First Dragon', 1, 'legendary', '7', '+4', '+4', 'Attachment', 'FF', 'Entomb: Play four random 1-cost units.'),
(60, 'Steelbound Dragon', 1, 'rare', '7', '7', '7', 'Unit', 'FF', 'Flying, Overwhelm'),
(61, 'Kaleb, Uncrowned Prince', 1, 'legendary', '8', '6', '6', 'Unit', 'FFF', 'Charge Summon: Play a random weapon on each of your F units.'),
(62, 'Lavablood Goliath', 1, 'legendary', '9', '6', '6', 'Unit', 'FF', 'Overwhelm Summon: Deal Lavablood Goliath\'s atk in damage.'),
(188, 'Trail Stories', 1, 'rare', '0', NULL, NULL, 'Spell', 'F', 'Reduce the cost of a spell in your hand by 1.'),
(417, 'Feln Banner', 1, 'common', NULL, NULL, NULL, 'Power', 'PS', 'Gain PS. Depleted unless you have a unit.'),
(418, 'Cobalt Monument', 1, 'uncommon', NULL, NULL, NULL, 'Power', 'P', 'Depleted Gain P. Transmute 5: 4/4 Stormdancer with Flying.'),
(419, 'Stonescar Banner', 1, 'common', NULL, NULL, NULL, 'Power', 'FS', 'Gain FS. Depleted unless you have a unit.'),
(420, 'Amber Monument', 1, 'uncommon', NULL, NULL, NULL, 'Power', 'T', 'Depleted Gain T. Transmute 5: 5/5 Rhinarc with Overwhelm.'),
(421, 'Elysian Banner', 1, 'common', NULL, NULL, NULL, 'Power', 'TP', 'Gain TP. Depleted unless you have a unit.'),
(422, 'Emerald Monument', 1, 'uncommon', NULL, NULL, NULL, 'Power', 'J', 'Depleted Gain J. Transmute 5: +3/+3 Gemblade.'),
(423, 'Granite Monument', 1, 'uncommon', NULL, NULL, NULL, 'Power', 'F', 'Depleted Gain F. Transmute 5: 4/1 Magmahound with Charge.'),
(424, 'Combrei Banner', 1, 'common', NULL, NULL, NULL, 'Power', 'TJ', 'Gain TJ. Depleted unless you have a unit.'),
(425, 'Diplomatic Seal', 1, 'uncommon', NULL, NULL, NULL, 'Power', NULL, 'If you have two or fewer influence, gain an influence of of your choice.'),
(426, 'Amethyst Monument', 1, 'uncommon', NULL, NULL, NULL, 'Power', 'S', 'Depleted Gain S. Transmute 5: 4/4 Puma with Lifesteal.'),
(427, 'Rakano Banner', 1, 'common', NULL, NULL, NULL, 'Power', 'FJ', 'Gain FJ. Depleted unless you have a unit.'),
(510, 'Morningstar', 1, 'uncommon', '4', '+3', '+3', 'Attachment', 'F', 'Overwhelm'),
(512, 'Fevered Scout', 1, 'uncommon', '3', '2', '2', 'Unit', 'F', 'When you play a spell, Fevered Scout gets +2/+2 this turn.');

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
