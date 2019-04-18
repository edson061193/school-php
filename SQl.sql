create view v_alumno_matr
as
select s.codigo_alumno,cl.codigo_curso, a.apelli__alumno,a.nombre__alumno,au.grado___aula,au.seccio__aula,cu.nombre__curso,d.nombre__docente
from  tb_alumno a  inner join tb_salon_clases s on  a.codigo_alumno=s.codigo_alumno
inner join tb_aula au on au.codigo_aula=s.codigo_aula 
inner join tb_carga_lectiva cl on cl.codigo_aula = au.codigo_aula 
inner join tb_docente d on d.codigo_docente=cl.codigo_docente
inner join tb_curso cu on cl.codigo_curso=cu.codigo_curso;


select a.codigo_alumno,c.nombre__curso,a.apelli__alumno,a.nombre__alumno ,t.codigo_bimestre,
r.nota_trabajos,r.promedio_01,r.promedio_02,r.promedio_03,r.nota_actitud,r.promedio_general
from tb_alumno a,tb_trimestre t,tb_resumen_trimestre r,tb_curso c;


select cl.codigo_curso , c.nombre__curso,cl.codigo_docente,cl.codigo_aula,a.seccio__aula,a.grado___aula
from tb_curso c 
inner join  tb_carga_lectiva cl on c.codigo_curso=cl.codigo_curso    
inner join tb_docente d on d.codigo_docente=cl.codigo_docente
inner join  tb_aula a on cl.codigo_aula=a.codigo_aula;

