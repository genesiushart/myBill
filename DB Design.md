# myBill

CREATE TABLE `myBill` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(50) NOT NULL,
  `taxcode` int(11) NOT NULL,
  `price` int(11) NOT NULL
)

- id ->  primary key 
- name -> the name of bill
- taxcode -> code of the tax category for each bill
- price -> the bill price before tax
