-- SALAS

INSERT INTO salas
(nome, tipo, regiao, endereco, descricao_topo, descricao, avaliacao)
VALUES
(
    'Sala Jardim Ângela',
    'Grupo',
    'Sudeste',
    'Avenida Carlos Caldeira Filho, 177 Jardim Ângela - São Paulo',
    'Espaço para locação',
    'Espaço para locação, ideal para reuniões, eventos, workshops ou atividades profissionais.',
    4.8
),

(
    'Sala Campo Limpo',
    'Grupo',
    'Sudeste',
    'Estrada do Campo Limpo, 1200 Campo Limpo - São Paulo',
    'Sala executiva moderna',
    'Sala executiva moderna, ideal para reuniões rápidas, entrevistas e atendimentos profissionais.',
    4.7
),

(
    'Coworking Cidade Tiradentes',
    'Privado',
    'Sudeste',
    'Rua Luís Mateus, 1200 Cidade Tiradentes - São Paulo',
    'Ambiente compartilhado para trabalho',
    'Ambiente compartilhado para trabalho, estudos, networking e produtividade.',
    4.6
),

(
    'Sala Vila Carmosina',
    'Privado',
    'Sudeste',
    'Rua José Francisco dos Santos, 245 - Vila Carmosina, São Paulo - SP',
    'Sala privativa para trabalho',
    'Sala privativa ideal para trabalho individual, reuniões online, estudos e atendimento profissional.',
    4.9
),

(
    'Espaço Profissional Tiradentes',
    'Grupo',
    'Sudeste',
    'Rua Antônio de Barros Neto, 188 - Cidade Tiradentes, São Paulo - SP',
    'Profissionalismo e oportunidade',
    'Um ambiente que conecta profissionalismo, oportunidade e transformação.',
    4.8
),

(
    'Sala Executiva Metalúrgicos',
    'Privado',
    'Sudeste',
    'Avenida dos Metalúrgicos, 1450 - Cidade Tiradentes, São Paulo - SP',
    'Conforto e produtividade',
    'Ambiente privativo desenvolvido para quem precisa de conforto, tecnologia e produtividade.',
    4.7
),

(
    'Centro de Eventos Jardim Ângela',
    'Grupo',
    'Sudeste',
    'Avenida Carlos Caldeira Filho, 177 Jardim Ângela - São Paulo',
    'Espaço para eventos',
    'Espaço para locação, ideal para reuniões, eventos, workshops ou atividades profissionais.',
    4.8
);

-- IMAGENS DAS SALAS

INSERT INTO imagens_salas (sala_id, imagem)
VALUES
(1, 'sala1.jpg'),
(2, 'sala2.jpg'),
(3, 'sala3.jpg'),
(4, 'sala4.jpg'),
(5, 'sala5.jpg'),
(6, 'sala6.jpg'),
(7, 'sala7.jpg');