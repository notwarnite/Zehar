delete from booking;
delete from customer;
delete from pricing;
delete from administrator;
delete from reservation;

INSERT INTO customer VALUES (50, 'Martha Smith',35 , 'martha@gmail.com', '12345user50', '4362123456476897', '');
INSERT INTO customer VALUES (51, 'James Anderson',42 , 'james@gmail.com', '12345user51', '4345745647689767', '');
INSERT INTO customer VALUES (52, 'Tyler Jones',27, 'tjones@gmail.com', '12345user52', '4362745456476897', '');


INSERT INTO booking VALUES (12, 50, 'confirmed', 1);
INSERT INTO booking VALUES (13, 51, 'confirmed', 1);
INSERT INTO booking VALUES (14, 52, 'confirmed', 1);

INSERT INTO pricing VALUES (100001, 12, 1, 3000.20, '2020-11-01');
INSERT INTO pricing VALUES (100002, 13, 2, 4800.75, '2020-10-24');
INSERT INTO pricing VALUES (100003, 14, 2, 5250.60, '2020-11-10');

INSERT INTO administrator VALUES (20, 'Jason Seagel', 'admin@ymca', 'hoteladmin12@gmail.com');

INSERT INTO reservation VALUES (12, '2018-05-09', '2018-05-11', 'Double', 2, 0, '', '2020-11-01 22:04:42');
INSERT INTO reservation VALUES (13, '2018-04-24', '2018-04-25', 'Deluxe', 1, 0, '', '2020-10-24 15:45:33');
INSERT INTO reservation VALUES (14, '2018-04-27', '2018-04-30', 'Deluxe', 1, 0, '', '2020-11-10 05:27:13');