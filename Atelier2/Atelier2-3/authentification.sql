-- phpMyAdmin SQL Dump
-- version 2.8.1
-- http://www.phpmyadmin.net
-- 
-- Serveur: localhost
-- Généré le : Mardi 05 Décembre 2006 à 22:56
-- Version du serveur: 5.0.22
-- Version de PHP: 5.1.4
-- 
-- Base de données: `bd_ex3`
-- 

-- --------------------------------------------------------

-- 
-- Structure de la table `utilisateurs`
-- 

CREATE TABLE `utilisateurs` (
  `Login` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Contenu de la table `utilisateurs`
-- 

INSERT INTO `utilisateurs` VALUES ('user1', 'passuser1');
INSERT INTO `utilisateurs` VALUES ('user2', 'passuser2');
INSERT INTO `utilisateurs` VALUES ('user3', 'passuser3');
INSERT INTO `utilisateurs` VALUES ('user4', 'passuser4');
