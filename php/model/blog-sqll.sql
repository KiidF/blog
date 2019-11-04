{\rtf1\ansi\ansicpg1252\cocoartf1561\cocoasubrtf600
{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\paperw11900\paperh16840\margl1440\margr1440\vieww10800\viewh8400\viewkind0
\pard\tx566\tx1133\tx1700\tx2267\tx2834\tx3401\tx3968\tx4535\tx5102\tx5669\tx6236\tx6803\pardirnatural\partightenfactor0

\f0\fs24 \cf0 -- phpMyAdmin SQL Dump\
-- version 4.8.5\
-- https://www.phpmyadmin.net/\
--\
-- H\'f4te : localhost:8889\
-- G\'e9n\'e9r\'e9 le :  lun. 04 nov. 2019 \'e0 14:01\
-- Version du serveur :  5.7.25\
-- Version de PHP :  7.3.1\
\
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";\
SET time_zone = "+00:00";\
\
--\
-- Base de donn\'e9es :  `blog-sqll`\
--\
\
-- --------------------------------------------------------\
\
--\
-- Structure de la table `blog`\
--\
\
CREATE TABLE `blog` (\
  `id` int(11) NOT NULL,\
  `contenu` varchar(160) NOT NULL,\
  `titre` text NOT NULL,\
  `photo` varchar(160) NOT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;\
\
-- --------------------------------------------------------\
\
--\
-- Structure de la table `contact`\
--\
\
CREATE TABLE `contact` (\
  `id` int(11) NOT NULL,\
  `nom` varchar(160) NOT NULL,\
  `email` varchar(160) NOT NULL,\
  `message` text NOT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;\
\
--\
-- D\'e9chargement des donn\'e9es de la table `contact`\
--\
\
INSERT INTO `contact` (`id`, `nom`, `email`, `message`) VALUES\
(1, 'fazia', 'fazeaeaz@gmail.com', 'sdskjfhdskdhgvsdhjhsddh'),\
(2, 'fazia', 'fazeaeaz@gmail.com', 'sdskjfhdskdhgvsdhjhsddh');\
\
-- --------------------------------------------------------\
\
--\
-- Structure de la table `newsletter`\
--\
\
CREATE TABLE `newsletter` (\
  `id` int(11) NOT NULL,\
  `nom` varchar(160) NOT NULL,\
  `email` varchar(160) NOT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;\
\
--\
-- Index pour les tables d\'e9charg\'e9es\
--\
\
--\
-- Index pour la table `blog`\
--\
ALTER TABLE `blog`\
  ADD PRIMARY KEY (`id`);\
\
--\
-- Index pour la table `contact`\
--\
ALTER TABLE `contact`\
  ADD PRIMARY KEY (`id`);\
\
--\
-- Index pour la table `newsletter`\
--\
ALTER TABLE `newsletter`\
  ADD PRIMARY KEY (`id`);\
\
--\
-- AUTO_INCREMENT pour les tables d\'e9charg\'e9es\
--\
\
--\
-- AUTO_INCREMENT pour la table `blog`\
--\
ALTER TABLE `blog`\
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;\
\
--\
-- AUTO_INCREMENT pour la table `contact`\
--\
ALTER TABLE `contact`\
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;\
\
--\
-- AUTO_INCREMENT pour la table `newsletter`\
--\
ALTER TABLE `newsletter`\
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;\
}