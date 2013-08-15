use `project_management`;
insert into `projects` values
    (1, 'faq'),
    (2, 'search');

insert into `tasks` values
    (1, 1, 'build list', '2013-03-01 00:00:00', 0),
    (2, 1, 'topic detail', '2013-08-19 00:00:00', 0),
    (3, 2, 'research elasticsearch', '2013-08-19 00:00:00', 0),
    (4, 2, 'implement', '2013-08-19 00:00:00', 0);
