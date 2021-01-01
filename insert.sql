INSERT INTO `achats` (`id_achat`, `achat_date`, `achat_prix_total`, `id_client`) VALUES
(1, '2020-11-04', 80, 2),
(2, '2020-11-11', 150, 3);

INSERT INTO `adresses` (`id_adresse`, `adr_num`, `adr_rue`, `adr_ville`) VALUES
(1, 24, 'azer', 'zartrtytt'),
(2, 12, 'rue berger', 'paris'),
(3, 45, 'avenue de la republique', 'villejuif');

INSERT INTO `categories` (`id_cat`, `cat_nom`) VALUES
(1, 'accessoire'),
(2, 'equipement'),
(3, 'entretien'),
(4, 'combinaison');

INSERT INTO `clients` (`id_client`, `client_nom`, `client_prenom`, `client_email`, `client_tel`, `client_carte`, `id_adresse`) VALUES
(1, 'name1', 'fname1', 'mail1', '0254856351', 'card1', 1),
(2, 'name2', 'fname2', 'mail2', '0302135456', 'car2', 2),
(3, 'name3', 'fname3', 'mail3', '0123456789', 'card3', 3);

INSERT INTO `contients` (`id_prod`, `id_achat`, `quantite`) VALUES
(1, 2, 1),
(2, 1, 1),
(3, 1, 1),
(3, 2, 1),
(4, 2, 1);

INSERT INTO `produits` (`id_prod`, `prod_nom`, `prod_description`, `prod_prix`, `prod_stock`, `prod_marque`, `prod_image`, `id_cat`) VALUES
(1, 'combi1', 'combinaison sport aquatique', 60, 80, 'marque1', 'img', 4),
(2, 'sac étanche', 'sac étanche 12L', 39.99, 180, 'marque2', 'https://static.fnac-static.com/multimedia/Images/FR/MDM/27/2c/a6/10890279/1540-1/tsp20200810171126/Sac-etanche-Helly-Hansen-12-L-Noir.jpg', 1),
(3, 'pantaton de ski', 'pantalon de ski homme ', 39.99, 200, 'marque3', 'https://contents.mediadecathlon.com/p1705475/k$44c205b859e25f0c0e39ab6a3cd070c7/sq/Pantalon+de+snowboard+et+de+ski+homme+SNB+PA+500+vert.jpg', 4),
(4, 'combinaison de ski', 'combinaisonde ski femme', 50, 40, 'marque3', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTCKXknc52yLUJj-3QRPCBM0teW7eaTlerIC8SLLH0z8Vrx-u6NZrHhgjXzE8nFUCc-lQP1QPY&usqp=CAc', 4);
