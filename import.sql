CREATE DATABASE IF NOT EXISTS voetbalteams;
USE voetbalteams;


DROP TABLE IF EXISTS spelers;
DROP TABLE IF EXISTS teams;


CREATE TABLE spelers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  teamnaam VARCHAR(100),
  ST VARCHAR(255),
  LW VARCHAR(255),
  RW VARCHAR(255),
  CAM VARCHAR(255),
  CM VARCHAR(255),
  CVM VARCHAR(255),
  LB VARCHAR(255),
  CB1 VARCHAR(255),
  CB2 VARCHAR(255),
  RB VARCHAR(255),
  GK VARCHAR(255)
);

INSERT INTO spelers (teamnaam, ST, LW, RW, CAM, CM, CVM, LB, CB1, CB2, RB, GK) VALUES
('RealMadrid', 'Mbappe', 'Vini Jr', 'Rodrygo', 'Bellingham', 'Camavinga', 'Tchoumani', 'Carreras', 'Rudiger', 'Militao', 'Trent', 'Courtois'),
('Galatasray', 'Osimhen', 'Noa lang', 'Sane', 'Lemina', 'Torreira', 'Gundugan', 'Jacobs', 'Bardace', 'Sanchez', 'Boey', 'cakir'),
('Manutd', 'Sesko', 'Cunha', 'Mbeumbo', 'Bruno fernandes', 'Uragte', 'Casemiro', 'Shaw', 'Maguire', 'De ligt', 'Dalot', 'Lammens'),
('Inter', 'Martinez', 'Thuram', 'Chananuglu', 'Mikhitarian', 'Barrela', 'Bisseck', 'Dimarco', 'Acerbi', 'Bastoni', 'Dumfries', 'sommer'),
('Feyenoord', 'Ueda', 'Sterling', 'Hadj Moussa', 'Valente', 'Hwang In Beom', 'Moder', 'Bos', 'Ahmedzovic', 'Watanabe', 'Read', 'Wellenreuther'),
('PSG', 'Demebele', 'Barcola', 'Doue', 'Vitinha', 'Joao Neves', 'Fabian Ruiz', 'Nuno Mendes', 'Pacho', 'Marquinhos', 'Hakimi', 'Chevallier'),
('Juventus', 'Vlahovic', 'Yildiz', 'Openda', 'David', 'Koopmeiners', 'Thuram', 'Jakob Rouhi', 'Bremer', 'Locatelli', 'Weah', 'Di Gregorio'),
('Liverpool', 'Ekiteke', 'Gakpo', 'Salah', 'Wirtz', 'Szoboszlai', 'Gravenberch', 'Kerkez', 'Van Dijk', 'Konate', 'Frimpong', 'Alisson'),
('Bayern', 'Kane', 'Diaz', 'Olise', 'Musiala', 'Goretzka', 'Pavlovic', 'Davies', 'Tah', 'Upamecano', 'Kimmich', 'Neuer');


CREATE TABLE teams (
  id INT AUTO_INCREMENT PRIMARY KEY,
  teamsnaam VARCHAR(255),
  LeagueTitels VARCHAR(255),
  UCL VARCHAR(255),
  Beker VARCHAR(255),
  Rivals VARCHAR(255),
  Opgerichtjaar DATE,
  land VARCHAR(50),
  clubwaarde BIGINT
);

INSERT INTO teams (teamsnaam, LeagueTitels, UCL, Beker, Rivals, Opgerichtjaar, land, clubwaarde) VALUES
('RealMadrid', '36', '15', '20', 'Barcelona', '1902-03-06', 'Spanje', 1200000000),
('Galatasaray', '25', '0', '25', 'Fenerbahçe', '1905-10-01', 'Turkije', 250000000),
('ManchesterUnited', '13', '3', '12', 'Manchester City', '1878-01-01', 'Engeland', 850000000),
('InterMilan', '20', '3', '9', 'AC Milan', '1908-03-09', 'Italië', 700000000),
('Feyenoord', '16', '1', '14', 'Ajax', '1908-07-19', 'Nederland', 350000000),
('PSG', '13', '1', '16', 'Marseille', '1970-08-12', 'Frankrijk', 900000000),
('Juventus', '36', '2', '15', 'Inter Milan', '1897-11-01', 'Italië', 750000000),
('Liverpool', '20', '6', '8', 'Everton', '1892-06-03', 'Engeland', 850000000),
('BayernMünchen', '34', '6', '20', 'Borussia Dortmund', '1900-02-27', 'Duitsland', 1000000000);