USE comp1006w2017dj;

CREATE TABLE networks (
network_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
network_name VARCHAR(50) NOT NULL);

INSERT INTO networks (network_name) VALUES  ('AMC'), ('FX'), ('HBO'), ('Showtime');

CREATE TABLE shows (
show_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
show_name VARCHAR(50) NOT NULL,
first_year INT NOT NULL,
network_name VARCHAR(50) NOT NULL);

INSERT INTO shows (show_name, first_year, network_name) VALUES
('Shameless', 2011, 'Showtime'),
('Episodes', 2011, 'Showtime'),
('Billions', 2016, 'Showtime'),
('The Americans', 2013, 'FX'),
('It\'s Always Sunny in Philadelphia', 2005, 'FX'),
('Fargo', 2014, 'FX'),
('Boardwalk Empire', 2010, 'HBO'),
('Silicon Valley', 2014, 'HBO'),
('The Newsroom', 2012, 'HBO'),
('The Walking Dead', 2010, 'AMC'),
('Better Call Saul', 2015, 'AMC'),
('Comic Book Men', 2012, 'AMC');