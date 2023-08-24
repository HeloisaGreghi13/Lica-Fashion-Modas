create database licafashion;
use licafashion;
create table produtos (
	id int primary key auto_increment,
	tipo varchar(255),
    nome varchar(255),
    descricao varchar(255),
    imagem varchar(255),
    preco decimal(5,2)
    );
    
    delete from licafashion.produtos where id >0;

INSERT INTO `licafashion`.`produtos` (`tipo`, `nome`, `descricao`, `imagem`, `preco`) VALUES ('Vestidos', 'Vestido Branco', 'Um belo vestido branco com detalhes florais, ótimo para ocasiões em família.', 'vestido_floral_branco.jpg', '150.00');

INSERT INTO `licafashion`.`produtos` (`tipo`, `nome`, `descricao`, `imagem`, `preco`) VALUES ('Vestidos', 'Vestido Azul', 'A harmonia perfeita da cor azul com a beleza das rosas, perfeito para um dia romântico.', 'vestido_azul_floral.jpg', '160.00');

INSERT INTO `licafashion`.`produtos` (`tipo`, `nome`, `descricao`, `imagem`, `preco`) VALUES ('Vestidos', 'Vestido Preto', 'Discreto, encantador e sofisticado, uma peça perfeita é este vestido preto.', 'vestido_preto.jpg"', '120.00');

INSERT INTO `licafashion`.`produtos` (`tipo`, `nome`, `descricao`, `imagem`, `preco`) VALUES ('Vestidos', 'Vestido Social Preto', 'Vestido social preto é a peça perfeita para transforma-lá na mulher elegante de negócios.', 'vestido_preto_social.jpg', '200.00');

INSERT INTO `licafashion`.`produtos` (`tipo`, `nome`, `descricao`, `imagem`, `preco`) VALUES ('Croppeds', 'Cropped Preto', 'Reage mulher! e coloque um cropped, perfeito para usar com uma calça jeans ou um shorts Jeans.', 'cropped_preto.jpg', '40.00');

INSERT INTO `licafashion`.`produtos` (`tipo`, `nome`, `descricao`, `imagem`, `preco`) VALUES ('Croppeds', 'Cropped Branco', 'A peça branca também tem seu charme.', 'cropped_branco.jpg', '30.00');

INSERT INTO `licafashion`.`produtos` (`tipo`, `nome`, `descricao`, `imagem`, `preco`) VALUES ('Croppeds', 'Cropped Preto Despojado', 'Para mulheres estilosas que gostam de se sentir lindas e confortáveis.', 'cropped_despojado.jpg', '39.90');

INSERT INTO `licafashion`.`produtos` (`tipo`, `nome`, `descricao`, `imagem`, `preco`) VALUES ('Croppeds', 'Cropped Rosa Manga Longa', 'O charme do rosa é se sentir como a Barbie.', 'Cropped_rosa_manga_longa.jpg', '50.00');

select * FROM licafashion.produtos;

SELECT * FROM produtos WHERE tipo = 'Cropped' ORDER BY preco
SELECT * FROM produtos WHERE tipo = 'vestidos' ORDER BY preco;