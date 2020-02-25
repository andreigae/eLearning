<?php

use App\Course;
use App\File;
use App\User;
use Illuminate\Database\Seeder;

class CourseDriveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$modules = json_decode('[
    				{
					"name": "Sección 1 Introduccion al curso",
					"type": "dir",

					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1XIF04bcJxmkfzXIJ260SYlIegZKILmso",
					"filename": "Sección 1 Introduccion al curso",
					"extension": "",
					"timestamp": 1559246739,
					"size": 0,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ",
					"basename": "1XIF04bcJxmkfzXIJ260SYlIegZKILmso"
					},
					{
					"name": "Sección 2 Preparación de tu sistema y algunas herramientas",
					"type": "dir",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/12drfoW5CTqwQH13mkKv6YJaPcNrvCleL",
					"filename": "Sección 2 Preparación de tu sistema y algunas herramientas",
					"extension": "",
					"timestamp": 1559247530,
					"size": 0,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ",
					"basename": "12drfoW5CTqwQH13mkKv6YJaPcNrvCleL"
					},
					{
					"name": "Sección 3 Creación y preparaciones para el servidor",
					"type": "dir",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1CY2fHUqcbwMwW5flpmH2ou9wATKb0P4c",
					"filename": "Sección 3 Creación y preparaciones para el servidor",
					"extension": "",
					"timestamp": 1559247821,
					"size": 0,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ",
					"basename": "1CY2fHUqcbwMwW5flpmH2ou9wATKb0P4c"
					},
					{
					"name": "Seccion 4 Usando y comprendiendo algunos comandos esenciales en ubuntu",
					"type": "dir",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1qaamEWfHcTFNIJ1vQx_sH63C5lJGiJ1k",
					"filename": "Seccion 4 Usando y comprendiendo algunos comandos esenciales en ubuntu",
					"extension": "",
					"timestamp": 1559248198,
					"size": 0,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ",
					"basename": "1qaamEWfHcTFNIJ1vQx_sH63C5lJGiJ1k"
					},
					{
					"name": "Seccion 5 Asignando una cuenta de usuario adicional para asegurar buen uso del VPS",
					"type": "dir",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1lm8KZKXSzXZluQpTSIEFD4Og-HoAYObm",
					"filename": "Seccion 5 Asignando una cuenta de usuario adicional para asegurar buen uso del VPS",
					"extension": "",
					"timestamp": 1559248852,
					"size": 0,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ",
					"basename": "1lm8KZKXSzXZluQpTSIEFD4Og-HoAYObm"
					},
					{
					"name": "Seccion 6 Estableciendo una capa de seguridad en el servidor VPS",
					"type": "dir",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1pGrLMozQyzt6XLe71jvAyaY3ur6bPqVi",
					"filename": "Seccion 6 Estableciendo una capa de seguridad en el servidor VPS",
					"extension": "",
					"timestamp": 1559248967,
					"size": 0,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ",
					"basename": "1pGrLMozQyzt6XLe71jvAyaY3ur6bPqVi"
					},
					{
					"name": "Seccion 7 Instalando y configurando Nginx en el VPS",
					"type": "dir",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1J3OX0FYsEgrdb3tdXyID7qnI7R6qzqWa",
					"filename": "Seccion 7 Instalando y configurando Nginx en el VPS",
					"extension": "",
					"timestamp": 1559249136,
					"size": 0,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ",
					"basename": "1J3OX0FYsEgrdb3tdXyID7qnI7R6qzqWa"
					},
					{
					"name": "Seccion 8 Instalando y configurando MySQL o MariaDB en el VPS",
					"type": "dir",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1ZsyVHtTKwGY6TF0BWWylfSZZcd8xSOmM",
					"filename": "Seccion 8 Instalando y configurando MySQL o MariaDB en el VPS",
					"extension": "",
					"timestamp": 1559249281,
					"size": 0,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ",
					"basename": "1ZsyVHtTKwGY6TF0BWWylfSZZcd8xSOmM"
					},
					{
					"name": "Seccion 9 Instalando y configurando PHP en el VPS",
					"type": "dir",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1MkOuZeILCcGsz44jRNX9nRbpXjppTDWq",
					"filename": "Seccion 9 Instalando y configurando PHP en el VPS",
					"extension": "",
					"timestamp": 1559249451,
					"size": 0,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ",
					"basename": "1MkOuZeILCcGsz44jRNX9nRbpXjppTDWq"
					},
					{
					"name": "Seccion 10 Haciendo Nginx y los sitos de VPS Mas Seguros y eficientes",
					"type": "dir",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1ULknlT8OwuVAik0djKZGv_QpY9TNqL5p",
					"filename": "Seccion 10 Haciendo Nginx y los sitos de VPS Mas Seguros y eficientes",
					"extension": "",
					"timestamp": 1559250059,
					"size": 0,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ",
					"basename": "1ULknlT8OwuVAik0djKZGv_QpY9TNqL5p"
					},
					{
					"name": "Seccion 11 Instalando y configurando herramientas utiles para los proyectos del VPS",
					"type": "dir",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1O4QIzUrlPHVBPQ4-Vp0U8S-BGEVZlGis",
					"filename": "Seccion 11 Instalando y configurando herramientas utiles para los proyectos del VPS",
					"extension": "",
					"timestamp": 1559250178,
					"size": 0,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ",
					"basename": "1O4QIzUrlPHVBPQ4-Vp0U8S-BGEVZlGis"
					},
					{
					"name": "Seccion 12 Despegar un sitio Wordpress en el VPS",
					"type": "dir",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1MS3OJvGTBSaj1EpDfd0azBLo-HgaOGJW",
					"filename": "Seccion 12 Despegar un sitio Wordpress en el VPS",
					"extension": "",
					"timestamp": 1559250234,
					"size": 0,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ",
					"basename": "1MS3OJvGTBSaj1EpDfd0azBLo-HgaOGJW"
					},
					{
					"name": "Seccion 13 Despegando un proyecto Laravel existente en el VPS",
					"type": "dir",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1AzOdIWy1_WIuGgyw3kw-iS76-tiEX3pm",
					"filename": "Seccion 13 Despegando un proyecto Laravel existente en el VPS",
					"extension": "",
					"timestamp": 1559251768,
					"size": 0,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ",
					"basename": "1AzOdIWy1_WIuGgyw3kw-iS76-tiEX3pm"
					},
					{
					"name": "Seccion 14 EJERCICIO Despliega un proyecto Laravel existente en el VPS",
					"type": "dir",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1fbOgPtySbRfEkcNi3K2WF26gahnd4IdQ",
					"filename": "Seccion 14 EJERCICIO Despliega un proyecto Laravel existente en el VPS",
					"extension": "",
					"timestamp": 1559251902,
					"size": 0,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ",
					"basename": "1fbOgPtySbRfEkcNi3K2WF26gahnd4IdQ"
					},
					{
					"name": "Seccion 15 EJERCICIO Despliega tu propio sitio Wordpress en el VPS",
					"type": "dir",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/16jh13rct8DGgusJDDhXdFF4sNxg2M0le",
					"filename": "Seccion 15 EJERCICIO Despliega tu propio sitio Wordpress en el VPS",
					"extension": "",
					"timestamp": 1559251972,
					"size": 0,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ",
					"basename": "16jh13rct8DGgusJDDhXdFF4sNxg2M0le"
					},
					{
					"name": "Seccion 16 Usando Letsencrypt para establecer Conexiones HTTPS en los sitios del VPS",
					"type": "dir",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1eiEuBtSvmXPpkwMHuzqVDEjwy1SAHiyN",
					"filename": "Seccion 16 Usando Letsencrypt para establecer Conexiones HTTPS en los sitios del VPS",
					"extension": "",
					"timestamp": 1559253396,
					"size": 0,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ",
					"basename": "1eiEuBtSvmXPpkwMHuzqVDEjwy1SAHiyN"
					},
					{
					"name": "Seccion 17 Conclusiones y recomendaciones",
					"type": "dir",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1wjTLqFcpWbKLTXCt_MBn5B7GeBbGegyD",
					"filename": "Seccion 17 Conclusiones y recomendaciones",
					"extension": "",
					"timestamp": 1559254046,
					"size": 0,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ",
					"basename": "1wjTLqFcpWbKLTXCt_MBn5B7GeBbGegyD"
					}
					]', true);



		$lessons = json_decode('[
    				{
					"name": "7. Generando llaves SSH para acceder al VPS de forma segura.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/12drfoW5CTqwQH13mkKv6YJaPcNrvCleL/1ewutwsx5k_1e2aFTSwqe-QSc-0CFZW5u",
					"filename": "7. Generando llaves SSH para acceder al VPS de forma segura",
					"extension": "mp4",
					"timestamp": 1559247466,
					"mimetype": "video/mp4",
					"size": 61770218,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/12drfoW5CTqwQH13mkKv6YJaPcNrvCleL",
					"basename": "1ewutwsx5k_1e2aFTSwqe-QSc-0CFZW5u"
					},
					{
					"name": "4. Creando una cuenta en un proveedor de VPS.mp4",
					"type": "file",

					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/12drfoW5CTqwQH13mkKv6YJaPcNrvCleL/1f5RbmvBfvUwYYZO5IwNhWsDCDsk0Zo8c",
					"filename": "4. Creando una cuenta en un proveedor de VPS",
					"extension": "mp4",
					"timestamp": 1559247096,
					"mimetype": "video/mp4",
					"size": 43746302,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/12drfoW5CTqwQH13mkKv6YJaPcNrvCleL",
					"basename": "1f5RbmvBfvUwYYZO5IwNhWsDCDsk0Zo8c"
					},
					{
					"name": "6. Habilitando comandos Linux en Windwos con it y CYGWIN.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/12drfoW5CTqwQH13mkKv6YJaPcNrvCleL/1IFn3XOr7-cey73RvAzUpblvNbMejYS7e",
					"filename": "6. Habilitando comandos Linux en Windwos con it y CYGWIN",
					"extension": "mp4",
					"timestamp": 1559247305,
					"mimetype": "video/mp4",
					"size": 36687212,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/12drfoW5CTqwQH13mkKv6YJaPcNrvCleL",
					"basename": "1IFn3XOr7-cey73RvAzUpblvNbMejYS7e"
					},
					{
					"name": "7. Recurso 2.url",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/12drfoW5CTqwQH13mkKv6YJaPcNrvCleL/1lWyt46cB50S078QBIksLM9PEJ6Lx6ae0",
					"filename": "7. Recurso 2",
					"extension": "url",
					"timestamp": 1559247530,
					"mimetype": "text/x-url",
					"size": 136,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/12drfoW5CTqwQH13mkKv6YJaPcNrvCleL",
					"basename": "1lWyt46cB50S078QBIksLM9PEJ6Lx6ae0"
					},
					{
					"name": "5. Recurso.url",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/12drfoW5CTqwQH13mkKv6YJaPcNrvCleL/1LY7K0Bqil4jDPVr1GayK4kL8vt4e0fWB",
					"filename": "5. Recurso",
					"extension": "url",
					"timestamp": 1559247249,
					"mimetype": "text/x-url",
					"size": 120,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/12drfoW5CTqwQH13mkKv6YJaPcNrvCleL",
					"basename": "1LY7K0Bqil4jDPVr1GayK4kL8vt4e0fWB"
					},
					{
					"name": "6. Recurso.url",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/12drfoW5CTqwQH13mkKv6YJaPcNrvCleL/1Mtp3U7IlNXCzxPfbGMDaTLK86c0853_T",
					"filename": "6. Recurso",
					"extension": "url",
					"timestamp": 1559247351,
					"mimetype": "text/x-url",
					"size": 122,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/12drfoW5CTqwQH13mkKv6YJaPcNrvCleL",
					"basename": "1Mtp3U7IlNXCzxPfbGMDaTLK86c0853_T"
					},
					{
					"name": "4. Recurso Comparativa.url",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/12drfoW5CTqwQH13mkKv6YJaPcNrvCleL/1NBEKThmadgYO6LEBslNbkksIzpC6z5zt",
					"filename": "4. Recurso Comparativa",
					"extension": "url",
					"timestamp": 1559247159,
					"mimetype": "text/x-url",
					"size": 170,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/12drfoW5CTqwQH13mkKv6YJaPcNrvCleL",
					"basename": "1NBEKThmadgYO6LEBslNbkksIzpC6z5zt"
					},
					{
					"name": "5. OPCIONAL Crear una cuenta con el proveedor usado durante el curso.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/12drfoW5CTqwQH13mkKv6YJaPcNrvCleL/1u14FAEBzPSDCtDfpBuzTBx8BR0B2LX87",
					"filename": "5. OPCIONAL Crear una cuenta con el proveedor usado durante el curso",
					"extension": "mp4",
					"timestamp": 1559247199,
					"mimetype": "video/mp4",
					"size": 73172869,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/12drfoW5CTqwQH13mkKv6YJaPcNrvCleL",
					"basename": "1u14FAEBzPSDCtDfpBuzTBx8BR0B2LX87"
					},
					{
					"name": "7. Recurso 1.url",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/12drfoW5CTqwQH13mkKv6YJaPcNrvCleL/1Z4ZBu6jj33__cUUClKWxAVgNaP5TKdfd",
					"filename": "7. Recurso 1",
					"extension": "url",
					"timestamp": 1559247518,
					"mimetype": "text/x-url",
					"size": 205,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/12drfoW5CTqwQH13mkKv6YJaPcNrvCleL",
					"basename": "1Z4ZBu6jj33__cUUClKWxAVgNaP5TKdfd"
					},
					{
					"name": "63. Obten la estructura de WordPress.docx",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/16jh13rct8DGgusJDDhXdFF4sNxg2M0le/1hd7U-Jf9XivXCN32X5eRv0jDIUuYxjlY",
					"filename": "63. Obten la estructura de WordPress",
					"extension": "docx",
					"timestamp": 1559251945,
					"mimetype": "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
					"size": 13109,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/16jh13rct8DGgusJDDhXdFF4sNxg2M0le",
					"basename": "1hd7U-Jf9XivXCN32X5eRv0jDIUuYxjlY"
					},
					{
					"name": "64. Despliega e instala WordPress en el VPS.docx",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/16jh13rct8DGgusJDDhXdFF4sNxg2M0le/1L9daSK82la6RJor-2_MeDXCsVDIuunnK",
					"filename": "64. Despliega e instala WordPress en el VPS",
					"extension": "docx",
					"timestamp": 1559251971,
					"mimetype": "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
					"size": 12944,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/16jh13rct8DGgusJDDhXdFF4sNxg2M0le",
					"basename": "1L9daSK82la6RJor-2_MeDXCsVDIuunnK"
					},
					{
					"name": "Curso.url",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1auXBU3_XhwD5DHDiOl7TLIIW6wWq2GXg",
					"filename": "Curso",
					"extension": "url",
					"timestamp": 1559251638,
					"mimetype": "text/x-url",
					"size": 177,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ",
					"basename": "1auXBU3_XhwD5DHDiOl7TLIIW6wWq2GXg"
					},
					{
					"name": "55. Obteniendo un proyecto Laravel desde Github.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1AzOdIWy1_WIuGgyw3kw-iS76-tiEX3pm/14s-Jm-kryll4RRiWe6RaxiMRgRQZAJvJ",
					"filename": "55. Obteniendo un proyecto Laravel desde Github",
					"extension": "mp4",
					"timestamp": 1559250551,
					"mimetype": "video/mp4",
					"size": 40298758,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1AzOdIWy1_WIuGgyw3kw-iS76-tiEX3pm",
					"basename": "14s-Jm-kryll4RRiWe6RaxiMRgRQZAJvJ"
					},
					{
					"name": "56. Instalando las dependencia de Laravel con Composer.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1AzOdIWy1_WIuGgyw3kw-iS76-tiEX3pm/1FrpUJS3ttYGKQK1xq3v4xNfpdk0REC3c",
					"filename": "56. Instalando las dependencia de Laravel con Composer",
					"extension": "mp4",
					"timestamp": 1559250953,
					"mimetype": "video/mp4",
					"size": 42520351,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1AzOdIWy1_WIuGgyw3kw-iS76-tiEX3pm",
					"basename": "1FrpUJS3ttYGKQK1xq3v4xNfpdk0REC3c"
					},
					{
					"name": "57. Preparando Nginx para el proyecto Laravel.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1AzOdIWy1_WIuGgyw3kw-iS76-tiEX3pm/1iQ-k-uZYxC4o4x2WmS1en0L4lNBASdpJ",
					"filename": "57. Preparando Nginx para el proyecto Laravel",
					"extension": "mp4",
					"timestamp": 1559251722,
					"mimetype": "video/mp4",
					"size": 39757249,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1AzOdIWy1_WIuGgyw3kw-iS76-tiEX3pm",
					"basename": "1iQ-k-uZYxC4o4x2WmS1en0L4lNBASdpJ"
					},
					{
					"name": "58. Desplegando y configurando Laravel en el VPS.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1AzOdIWy1_WIuGgyw3kw-iS76-tiEX3pm/1Q9d8dWDk9gbpRvB_bIzPP0lfHUENotgd",
					"filename": "58. Desplegando y configurando Laravel en el VPS",
					"extension": "mp4",
					"timestamp": 1559251754,
					"mimetype": "video/mp4",
					"size": 70192724,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1AzOdIWy1_WIuGgyw3kw-iS76-tiEX3pm",
					"basename": "1Q9d8dWDk9gbpRvB_bIzPP0lfHUENotgd"
					},
				    {
					"name": "12. Apuntando un dominio existente al servidor VPS.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1CY2fHUqcbwMwW5flpmH2ou9wATKb0P4c/1-mLtjruhgPzTLl65_ffpnAjEB98Yux6V",
					"filename": "12. Apuntando un dominio existente al servidor VPS",
					"extension": "mp4",
					"timestamp": 1559247752,
					"mimetype": "video/mp4",
					"size": 38328804,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1CY2fHUqcbwMwW5flpmH2ou9wATKb0P4c",
					"basename": "1-mLtjruhgPzTLl65_ffpnAjEB98Yux6V"
					},
					{
					"name": "8. Creando tu VPS con Ubuntu 18.04.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1CY2fHUqcbwMwW5flpmH2ou9wATKb0P4c/14sdJR5IGYxado6q0CNCXKerBK5qetqh2",
					"filename": "8. Creando tu VPS con Ubuntu 18.04",
					"extension": "mp4",
					"timestamp": 1559247576,
					"mimetype": "video/mp4",
					"size": 44298288,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1CY2fHUqcbwMwW5flpmH2ou9wATKb0P4c",
					"basename": "14sdJR5IGYxado6q0CNCXKerBK5qetqh2"
					},
					{
					"name": "10. Mejorando-el-flujo-de-conexi-n-al-VPS.txt",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1CY2fHUqcbwMwW5flpmH2ou9wATKb0P4c/15chocjVplyUSoHdNlj05jJo3KIub2Wb-",
					"filename": "10. Mejorando-el-flujo-de-conexi-n-al-VPS",
					"extension": "txt",
					"timestamp": 1559247701,
					"mimetype": "text/plain",
					"size": 99,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1CY2fHUqcbwMwW5flpmH2ou9wATKb0P4c",
					"basename": "15chocjVplyUSoHdNlj05jJo3KIub2Wb-"
					},
					{
					"name": "13. Apuntando el dominio al DNS de DigitalOcean.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1CY2fHUqcbwMwW5flpmH2ou9wATKb0P4c/1AJdMFzjx5RjetQpgtH37hshi01WAYnuM",
					"filename": "13. Apuntando el dominio al DNS de DigitalOcean",
					"extension": "mp4",
					"timestamp": 1559247792,
					"mimetype": "video/mp4",
					"size": 37393103,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1CY2fHUqcbwMwW5flpmH2ou9wATKb0P4c",
					"basename": "1AJdMFzjx5RjetQpgtH37hshi01WAYnuM"
					},
					 {
					"name": "11. Manteniendo la conexion activa con el servidor.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1CY2fHUqcbwMwW5flpmH2ou9wATKb0P4c/1deC0Qx7rsT-cU5o-CpqgoUf_Hp4yLR6R",
					"filename": "11. Manteniendo la conexion activa con el servidor",
					"extension": "mp4",
					"timestamp": 1559247720,
					"mimetype": "video/mp4",
					"size": 25729540,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1CY2fHUqcbwMwW5flpmH2ou9wATKb0P4c",
					"basename": "1deC0Qx7rsT-cU5o-CpqgoUf_Hp4yLR6R"
					},
					 {
					"name": "10. Mejorando el flujo de conexion.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1CY2fHUqcbwMwW5flpmH2ou9wATKb0P4c/1E78pRalxCoJbXllDebJ-atneBC3ifYLI",
					"filename": "10. Mejorando el flujo de conexion",
					"extension": "mp4",
					"timestamp": 1559247651,
					"mimetype": "video/mp4",
					"size": 15601649,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1CY2fHUqcbwMwW5flpmH2ou9wATKb0P4c",
					"basename": "1E78pRalxCoJbXllDebJ-atneBC3ifYLI"
					},
					 {
					"name": "11. Manteniendo-la-conexi-n-activa-con-el-servidor.txt",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1CY2fHUqcbwMwW5flpmH2ou9wATKb0P4c/1eYcwOXffK7TCl5M2oKqHyaQp48-wQznp",
					"filename": "11. Manteniendo-la-conexi-n-activa-con-el-servidor",
					"extension": "txt",
					"timestamp": 1559247682,
					"mimetype": "text/plain",
					"size": 149,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1CY2fHUqcbwMwW5flpmH2ou9wATKb0P4c",
					"basename": "1eYcwOXffK7TCl5M2oKqHyaQp48-wQznp"
					},
					 {
					"name": "Apuntando-el-dominio-al-DNS-de-DigitalOcean.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1CY2fHUqcbwMwW5flpmH2ou9wATKb0P4c/1Gv8B5gEsZ-Gms4lQyYbAzRUsgLRwAAq5",
					"filename": "Apuntando-el-dominio-al-DNS-de-DigitalOcean",
					"extension": "mp4",
					"timestamp": 1559247816,
					"mimetype": "video/mp4",
					"size": 45610424,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1CY2fHUqcbwMwW5flpmH2ou9wATKb0P4c",
					"basename": "1Gv8B5gEsZ-Gms4lQyYbAzRUsgLRwAAq5"
					},
					 {
					"name": "12. Recurso.url",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1CY2fHUqcbwMwW5flpmH2ou9wATKb0P4c/1LaMvmiHMsq8776MdWOx14aD1VtV3ordJ",
					"filename": "12. Recurso",
					"extension": "url",
					"timestamp": 1559247780,
					"mimetype": "text/x-url",
					"size": 158,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1CY2fHUqcbwMwW5flpmH2ou9wATKb0P4c",
					"basename": "1LaMvmiHMsq8776MdWOx14aD1VtV3ordJ"
					},
					 {
					"name": "9. Conectandose al VPs por medio SSH.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1CY2fHUqcbwMwW5flpmH2ou9wATKb0P4c/1mctj35SRwssMI62LOrFrZhO5rk-wEPWs",
					"filename": "9. Conectandose al VPs por medio SSH",
					"extension": "mp4",
					"timestamp": 1559247601,
					"mimetype": "video/mp4",
					"size": 43170141,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1CY2fHUqcbwMwW5flpmH2ou9wATKb0P4c",
					"basename": "1mctj35SRwssMI62LOrFrZhO5rk-wEPWs"
					},
					{
					"name": "9. Recurso.url",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1CY2fHUqcbwMwW5flpmH2ou9wATKb0P4c/1rGo74rC8KfLLnt-BTSWuWCGCuLa5CD1M",
					"filename": "9. Recurso",
					"extension": "url",
					"timestamp": 1559247626,
					"mimetype": "text/x-url",
					"size": 135,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1CY2fHUqcbwMwW5flpmH2ou9wATKb0P4c",
					"basename": "1rGo74rC8KfLLnt-BTSWuWCGCuLa5CD1M"
					},
					 {
					"name": "70. Configurando los sitios de Ngixn para usar HTTPS.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1eiEuBtSvmXPpkwMHuzqVDEjwy1SAHiyN/13WHmrXOP18AVKPra6pOXq7taTtCQgwSC",
					"filename": "70. Configurando los sitios de Ngixn para usar HTTPS",
					"extension": "mp4",
					"timestamp": 1559252773,
					"mimetype": "video/mp4",
					"size": 101433111,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1eiEuBtSvmXPpkwMHuzqVDEjwy1SAHiyN",
					"basename": "13WHmrXOP18AVKPra6pOXq7taTtCQgwSC"
					},
					 {
					"name": "71. Resolviendo un problema con Https y las cabecer seg.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1eiEuBtSvmXPpkwMHuzqVDEjwy1SAHiyN/17hAbHo9ooFfpDcbL41ya-1DFhxMGIIPP",
					"filename": "71. Resolviendo un problema con Https y las cabecer seg",
					"extension": "mp4",
					"timestamp": 1559253064,
					"mimetype": "video/mp4",
					"size": 55673477,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1eiEuBtSvmXPpkwMHuzqVDEjwy1SAHiyN",
					"basename": "17hAbHo9ooFfpDcbL41ya-1DFhxMGIIPP"
					},
					 {
					"name": "68. Usando Letsencrypt para obtener un certificado para.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1eiEuBtSvmXPpkwMHuzqVDEjwy1SAHiyN/187UffrL6dHS3Y2WZCSvs_dKlyghQK7Or",
					"filename": "68. Usando Letsencrypt para obtener un certificado para",
					"extension": "mp4",
					"timestamp": 1559252084,
					"mimetype": "video/mp4",
					"size": 84097947,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1eiEuBtSvmXPpkwMHuzqVDEjwy1SAHiyN",
					"basename": "187UffrL6dHS3Y2WZCSvs_dKlyghQK7Or"
					},
					 {
					"name": "72. Comprobando la seguridad de los dominios del VPS.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1eiEuBtSvmXPpkwMHuzqVDEjwy1SAHiyN/1bbcL1JM9XuLE5FaSvytC2pXeF-AJa41v",
					"filename": "72. Comprobando la seguridad de los dominios del VPS",
					"extension": "mp4",
					"timestamp": 1559253372,
					"mimetype": "video/mp4",
					"size": 41962190,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1eiEuBtSvmXPpkwMHuzqVDEjwy1SAHiyN",
					"basename": "1bbcL1JM9XuLE5FaSvytC2pXeF-AJa41v"
					},
					 {
					"name": "69. Instalando cada certificado de LEtsencrypt en el VP.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1eiEuBtSvmXPpkwMHuzqVDEjwy1SAHiyN/1K0D8ZI79bIV-wHBgniwH6zMJt-_rtmgX",
					"filename": "69. Instalando cada certificado de LEtsencrypt en el VP",
					"extension": "mp4",
					"timestamp": 1559252220,
					"mimetype": "video/mp4",
					"size": 57678067,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1eiEuBtSvmXPpkwMHuzqVDEjwy1SAHiyN",
					"basename": "1K0D8ZI79bIV-wHBgniwH6zMJt-_rtmgX"
					},
					 {
					"name": "65. Acerca de Letsencrypt y acme.sh como cliente.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1eiEuBtSvmXPpkwMHuzqVDEjwy1SAHiyN/1RxAVP39WIoczLJlvUbVEsRcM17Tglsxe",
					"filename": "65. Acerca de Letsencrypt y acme.sh como cliente",
					"extension": "mp4",
					"timestamp": 1559251992,
					"mimetype": "video/mp4",
					"size": 44546133,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1eiEuBtSvmXPpkwMHuzqVDEjwy1SAHiyN",
					"basename": "1RxAVP39WIoczLJlvUbVEsRcM17Tglsxe"
					},
					 {
					"name": "67. Conociendo el cliente de Letsencrypt y preparando v.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1eiEuBtSvmXPpkwMHuzqVDEjwy1SAHiyN/1X7OPtSyndxtSHiswYjQoEwnSxWa2mKPT",
					"filename": "67. Conociendo el cliente de Letsencrypt y preparando v",
					"extension": "mp4",
					"timestamp": 1559252050,
					"mimetype": "video/mp4",
					"size": 27700377,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1eiEuBtSvmXPpkwMHuzqVDEjwy1SAHiyN",
					"basename": "1X7OPtSyndxtSHiswYjQoEwnSxWa2mKPT"
					},
					 {
					"name": "66. Instalando un cliente liviano de Letsencrypt(acme.s.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1eiEuBtSvmXPpkwMHuzqVDEjwy1SAHiyN/1y6F8XeGSH6irSIWDBQIhaWVexRAPWdpe",
					"filename": "66. Instalando un cliente liviano de Letsencrypt(acme.s",
					"extension": "mp4",
					"timestamp": 1559252018,
					"mimetype": "video/mp4",
					"size": 54208373,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1eiEuBtSvmXPpkwMHuzqVDEjwy1SAHiyN",
					"basename": "1y6F8XeGSH6irSIWDBQIhaWVexRAPWdpe"
					},
					 {
					"name": "60. Resuelve las dependencias del proyecto con composer.docx",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1fbOgPtySbRfEkcNi3K2WF26gahnd4IdQ/1-QesK3VbHc8w_6NxRQmdcZ43XFvCrezO",
					"filename": "60. Resuelve las dependencias del proyecto con composer",
					"extension": "docx",
					"timestamp": 1559251847,
					"mimetype": "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
					"size": 12701,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1fbOgPtySbRfEkcNi3K2WF26gahnd4IdQ",
					"basename": "1-QesK3VbHc8w_6NxRQmdcZ43XFvCrezO"
					},
					 {
					"name": "62. Despliega y configura el proyecto Laravel.docx",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1fbOgPtySbRfEkcNi3K2WF26gahnd4IdQ/15vg82r-72l7H0qiPSMvvYyYVZfq2-mT6",
					"filename": "62. Despliega y configura el proyecto Laravel",
					"extension": "docx",
					"timestamp": 1559251900,
					"mimetype": "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
					"size": 13319,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1fbOgPtySbRfEkcNi3K2WF26gahnd4IdQ",
					"basename": "15vg82r-72l7H0qiPSMvvYyYVZfq2-mT6"
					},
					 {
					"name": "61. Configurar el sitio de assets para apuntar a este proyecto.docx",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1fbOgPtySbRfEkcNi3K2WF26gahnd4IdQ/1lwK8QxCLvE3xrmJDQg_T2wR2Kvu4wlaA",
					"filename": "61. Configurar el sitio de assets para apuntar a este proyecto",
					"extension": "docx",
					"timestamp": 1559251869,
					"mimetype": "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
					"size": 12897,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1fbOgPtySbRfEkcNi3K2WF26gahnd4IdQ",
					"basename": "1lwK8QxCLvE3xrmJDQg_T2wR2Kvu4wlaA"
					},
					 {
					"name": "59. Obten el proyecto Laravel desde Github.docx",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1fbOgPtySbRfEkcNi3K2WF26gahnd4IdQ/1nsQ6olOAwQVsEfwJ36EQKlG6fHOerWFO",
					"filename": "59. Obten el proyecto Laravel desde Github",
					"extension": "docx",
					"timestamp": 1559251817,
					"mimetype": "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
					"size": 12612,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1fbOgPtySbRfEkcNi3K2WF26gahnd4IdQ",
					"basename": "1nsQ6olOAwQVsEfwJ36EQKlG6fHOerWFO"
					},
					 {
					"name": "33. Configurando subdominios en el VPS con Nginx.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1J3OX0FYsEgrdb3tdXyID7qnI7R6qzqWa/10AaI0Jv5LoXW9pGvVKmLu0fvHKAs2Hk_",
					"filename": "33. Configurando subdominios en el VPS con Nginx",
					"extension": "mp4",
					"timestamp": 1559249122,
					"mimetype": "video/mp4",
					"size": 74817716,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1J3OX0FYsEgrdb3tdXyID7qnI7R6qzqWa",
					"basename": "10AaI0Jv5LoXW9pGvVKmLu0fvHKAs2Hk_"
					},
					 {
					"name": "32. Estableciendo el primer sitio en Nginx.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1J3OX0FYsEgrdb3tdXyID7qnI7R6qzqWa/1QM5Ymx1A8rFxjYSlE6pjHrXPjAkfOL2S",
					"filename": "32. Estableciendo el primer sitio en Nginx",
					"extension": "mp4",
					"timestamp": 1559249090,
					"mimetype": "video/mp4",
					"size": 56688188,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1J3OX0FYsEgrdb3tdXyID7qnI7R6qzqWa",
					"basename": "1QM5Ymx1A8rFxjYSlE6pjHrXPjAkfOL2S"
					},
					 {
					"name": "31. Como logra Nginx responder peticiones.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1J3OX0FYsEgrdb3tdXyID7qnI7R6qzqWa/1R7HUR39Kql5QlblXSzR1kXcrSpqXhLCk",
					"filename": "31. Como logra Nginx responder peticiones",
					"extension": "mp4",
					"timestamp": 1559249066,
					"mimetype": "video/mp4",
					"size": 58361735,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1J3OX0FYsEgrdb3tdXyID7qnI7R6qzqWa",
					"basename": "1R7HUR39Kql5QlblXSzR1kXcrSpqXhLCk"
					},
					 {
					"name": "29. Permitiendo acceso a los sitios servidos por Nginx.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1J3OX0FYsEgrdb3tdXyID7qnI7R6qzqWa/1rpjlTb8d_KsPzlZlZfppRG57nM6n1DGz",
					"filename": "29. Permitiendo acceso a los sitios servidos por Nginx",
					"extension": "mp4",
					"timestamp": 1559248998,
					"mimetype": "video/mp4",
					"size": 17774470,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1J3OX0FYsEgrdb3tdXyID7qnI7R6qzqWa",
					"basename": "1rpjlTb8d_KsPzlZlZfppRG57nM6n1DGz"
					},
					 {
					"name": "28. Instalando Nginx en el VPS.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1J3OX0FYsEgrdb3tdXyID7qnI7R6qzqWa/1tI41_9FlU9TWFn_CGmIqb7FjWP60ZBIR",
					"filename": "28. Instalando Nginx en el VPS",
					"extension": "mp4",
					"timestamp": 1559248980,
					"mimetype": "video/mp4",
					"size": 39911314,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1J3OX0FYsEgrdb3tdXyID7qnI7R6qzqWa",
					"basename": "1tI41_9FlU9TWFn_CGmIqb7FjWP60ZBIR"
					},
					 {
					"name": "30. Donde esta Nginx y su configuracion en el VPS.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1J3OX0FYsEgrdb3tdXyID7qnI7R6qzqWa/1Tu5bPp1-38ImFEeG5l6ZTeDuAXQftWLk",
					"filename": "30. Donde esta Nginx y su configuracion en el VPS",
					"extension": "mp4",
					"timestamp": 1559249034,
					"mimetype": "video/mp4",
					"size": 57728767,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1J3OX0FYsEgrdb3tdXyID7qnI7R6qzqWa",
					"basename": "1Tu5bPp1-38ImFEeG5l6ZTeDuAXQftWLk"
					},
					 {
					"name": "22. Llave ssh",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1lm8KZKXSzXZluQpTSIEFD4Og-HoAYObm/1cjzZQpDAxFyppDGYWjqleTX7TL8-Le2fSL7N3q09ZPk",
					"filename": "22",
					"extension": " Llave ssh",
					"timestamp": 1564901737,
					"mimetype": "application/vnd.google-apps.document",
					"size": 0,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1lm8KZKXSzXZluQpTSIEFD4Og-HoAYObm",
					"basename": "1cjzZQpDAxFyppDGYWjqleTX7TL8-Le2fSL7N3q09ZPk"
					},
					 {
					"name": "23. Asignando y usando permisos administrativos en Ubuntu.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1lm8KZKXSzXZluQpTSIEFD4Og-HoAYObm/1pWIMqi4AEOYAtecwoKZj8nBNtUcIQ1MF",
					"filename": "23. Asignando y usando permisos administrativos en Ubuntu",
					"extension": "mp4",
					"timestamp": 1559248836,
					"mimetype": "video/mp4",
					"size": 63463540,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1lm8KZKXSzXZluQpTSIEFD4Og-HoAYObm",
					"basename": "1pWIMqi4AEOYAtecwoKZj8nBNtUcIQ1MF"
					},
					 {
					"name": "22. Como iniciar sesion en el VPS con un nuevo usuario.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1lm8KZKXSzXZluQpTSIEFD4Og-HoAYObm/1ueaxgCsbPropjm309lfoqawc_xZOGAIg",
					"filename": "22. Como iniciar sesion en el VPS con un nuevo usuario",
					"extension": "mp4",
					"timestamp": 1559248807,
					"mimetype": "video/mp4",
					"size": 46639271,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1lm8KZKXSzXZluQpTSIEFD4Og-HoAYObm",
					"basename": "1ueaxgCsbPropjm309lfoqawc_xZOGAIg"
					},
					 {
					"name": "21. Como gestionar cuentas de usuario en Ubuntu(crear eli.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1lm8KZKXSzXZluQpTSIEFD4Og-HoAYObm/1urGjO3_C9THzh4RjVL-jOUrQkJeZ52YN",
					"filename": "21. Como gestionar cuentas de usuario en Ubuntu(crear eli",
					"extension": "mp4",
					"timestamp": 1559248670,
					"mimetype": "video/mp4",
					"size": 61860216,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1lm8KZKXSzXZluQpTSIEFD4Og-HoAYObm",
					"basename": "1urGjO3_C9THzh4RjVL-jOUrQkJeZ52YN"
					},
					 {
					"name": "41. Enviando-peticiones-desde-Nginx-hacia-PHP-FPM.txt",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1MkOuZeILCcGsz44jRNX9nRbpXjppTDWq/12L7Jo9l7cLafFITKjlwMrATjODGfH9-k",
					"filename": "41. Enviando-peticiones-desde-Nginx-hacia-PHP-FPM",
					"extension": "txt",
					"timestamp": 1559249446,
					"mimetype": "text/plain",
					"size": 69,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1MkOuZeILCcGsz44jRNX9nRbpXjppTDWq",
					"basename": "12L7Jo9l7cLafFITKjlwMrATjODGfH9-k"
					},
					 {
					"name": "41. Enviando peticiones desde Nginx hacia PHP-FPM.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1MkOuZeILCcGsz44jRNX9nRbpXjppTDWq/15Y-wAq6kKKXTuE7efhREhCQLpf2g2qkz",
					"filename": "41. Enviando peticiones desde Nginx hacia PHP-FPM",
					"extension": "mp4",
					"timestamp": 1559249427,
					"mimetype": "video/mp4",
					"size": 62150967,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1MkOuZeILCcGsz44jRNX9nRbpXjppTDWq",
					"basename": "15Y-wAq6kKKXTuE7efhREhCQLpf2g2qkz"
					},
					 {
					"name": "38. Instalando PHP FPM (fast Processing Module) en el VPS.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1MkOuZeILCcGsz44jRNX9nRbpXjppTDWq/1kaVpGtT7pCfhcFtUXkSxjNXkfaD7N3qu",
					"filename": "38. Instalando PHP FPM (fast Processing Module) en el VPS",
					"extension": "mp4",
					"timestamp": 1559249319,
					"mimetype": "video/mp4",
					"size": 34565733,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1MkOuZeILCcGsz44jRNX9nRbpXjppTDWq",
					"basename": "1kaVpGtT7pCfhcFtUXkSxjNXkfaD7N3qu"
					},
					 {
					"name": "39. Los Archivos y ubicaciones importantes de PHP en Ubuntu.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1MkOuZeILCcGsz44jRNX9nRbpXjppTDWq/1mc4z2JSUh50GRjGSW_8iRYHjXSqUbuut",
					"filename": "39. Los Archivos y ubicaciones importantes de PHP en Ubuntu",
					"extension": "mp4",
					"timestamp": 1559249354,
					"mimetype": "video/mp4",
					"size": 42554667,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1MkOuZeILCcGsz44jRNX9nRbpXjppTDWq",
					"basename": "1mc4z2JSUh50GRjGSW_8iRYHjXSqUbuut"
					},
					 {
					"name": "40. Asegurando la instalacion de php del VPS.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1MkOuZeILCcGsz44jRNX9nRbpXjppTDWq/1X3O3qIMq-ZuAFrJB3hE4fqJrb7gYOGzc",
					"filename": "40. Asegurando la instalacion de php del VPS",
					"extension": "mp4",
					"timestamp": 1559249395,
					"mimetype": "video/mp4",
					"size": 27303689,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1MkOuZeILCcGsz44jRNX9nRbpXjppTDWq",
					"basename": "1X3O3qIMq-ZuAFrJB3hE4fqJrb7gYOGzc"
					},
					 {
					"name": "53. Obteniendo la estructura de WordPress en el VPS.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1MS3OJvGTBSaj1EpDfd0azBLo-HgaOGJW/1QIa71LrRqPbNG-ZpWBX7cZM0ofG9VniK",
					"filename": "53. Obteniendo la estructura de WordPress en el VPS",
					"extension": "mp4",
					"timestamp": 1559250195,
					"mimetype": "video/mp4",
					"size": 39974683,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1MS3OJvGTBSaj1EpDfd0azBLo-HgaOGJW",
					"basename": "1QIa71LrRqPbNG-ZpWBX7cZM0ofG9VniK"
					},
					 {
					"name": "54. Desplegando e instalando WordPress en el VPS.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1MS3OJvGTBSaj1EpDfd0azBLo-HgaOGJW/1Xheh21TfAzYzOXo6BxB6kL3Gydpeoz3Y",
					"filename": "54. Desplegando e instalando WordPress en el VPS",
					"extension": "mp4",
					"timestamp": 1559250219,
					"mimetype": "video/mp4",
					"size": 21624333,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1MS3OJvGTBSaj1EpDfd0azBLo-HgaOGJW",
					"basename": "1Xheh21TfAzYzOXo6BxB6kL3Gydpeoz3Y"
					},
					 {
					"name": "51. Preparando el vPS para establecer conexiones ssh ter.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1O4QIzUrlPHVBPQ4-Vp0U8S-BGEVZlGis/12r4fcIRd8XPQ5m0VKhpaL6jmBimg11d9",
					"filename": "51. Preparando el vPS para establecer conexiones ssh ter",
					"extension": "mp4",
					"timestamp": 1559250133,
					"mimetype": "video/mp4",
					"size": 93019727,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1O4QIzUrlPHVBPQ4-Vp0U8S-BGEVZlGis",
					"basename": "12r4fcIRd8XPQ5m0VKhpaL6jmBimg11d9"
					},
					 {
					"name": "52. Instalando extensiones adicionales de PHP en el VPS.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1O4QIzUrlPHVBPQ4-Vp0U8S-BGEVZlGis/1fQgF6pYxMmmWA4UGGTWagUwn0Pp4Zusa",
					"filename": "52. Instalando extensiones adicionales de PHP en el VPS",
					"extension": "mp4",
					"timestamp": 1559250165,
					"mimetype": "video/mp4",
					"size": 28473370,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1O4QIzUrlPHVBPQ4-Vp0U8S-BGEVZlGis",
					"basename": "1fQgF6pYxMmmWA4UGGTWagUwn0Pp4Zusa"
					},
					 {
					"name": "50. Instalar y configurar composer en el VPS.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1O4QIzUrlPHVBPQ4-Vp0U8S-BGEVZlGis/1pS9dRZxAjOYIP6Ocka-cdVM6Az6u48Oi",
					"filename": "50. Instalar y configurar composer en el VPS",
					"extension": "mp4",
					"timestamp": 1559250095,
					"mimetype": "video/mp4",
					"size": 55467919,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1O4QIzUrlPHVBPQ4-Vp0U8S-BGEVZlGis",
					"basename": "1pS9dRZxAjOYIP6Ocka-cdVM6Az6u48Oi"
					},
					 {
					"name": "26. Asignando permisos de forma correcta en Ubuntu.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1pGrLMozQyzt6XLe71jvAyaY3ur6bPqVi/1A2k-Jd_lKAEqdEzwbBkq1dAXRf_ZYFUu",
					"filename": "26. Asignando permisos de forma correcta en Ubuntu",
					"extension": "mp4",
					"timestamp": 1559248929,
					"mimetype": "video/mp4",
					"size": 77351053,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1pGrLMozQyzt6XLe71jvAyaY3ur6bPqVi",
					"basename": "1A2k-Jd_lKAEqdEzwbBkq1dAXRf_ZYFUu"
					},
					 {
					"name": "24. Impidiento el inicio de sesion como root en el VPS.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1pGrLMozQyzt6XLe71jvAyaY3ur6bPqVi/1gcUy409fvpYE-iqlfyy6dTcn5Kr6JS_z",
					"filename": "24. Impidiento el inicio de sesion como root en el VPS",
					"extension": "mp4",
					"timestamp": 1559248867,
					"mimetype": "video/mp4",
					"size": 39816935,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1pGrLMozQyzt6XLe71jvAyaY3ur6bPqVi",
					"basename": "1gcUy409fvpYE-iqlfyy6dTcn5Kr6JS_z"
					},
					 {
					"name": "27. Usando fail2ban para prevenir intrusos en el VPS.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1pGrLMozQyzt6XLe71jvAyaY3ur6bPqVi/1MtcIlWHdJEROiPqzc73fmz6UPVjUbOIj",
					"filename": "27. Usando fail2ban para prevenir intrusos en el VPS",
					"extension": "mp4",
					"timestamp": 1559248954,
					"mimetype": "video/mp4",
					"size": 81268522,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1pGrLMozQyzt6XLe71jvAyaY3ur6bPqVi",
					"basename": "1MtcIlWHdJEROiPqzc73fmz6UPVjUbOIj"
					},
					 {
					"name": "25. Configurando y usando el firewall UFW de Ubuntu.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1pGrLMozQyzt6XLe71jvAyaY3ur6bPqVi/1uoY_t58SJceesY6yMC1zfosq42OwW73I",
					"filename": "25. Configurando y usando el firewall UFW de Ubuntu",
					"extension": "mp4",
					"timestamp": 1559248900,
					"mimetype": "video/mp4",
					"size": 45905582,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1pGrLMozQyzt6XLe71jvAyaY3ur6bPqVi",
					"basename": "1uoY_t58SJceesY6yMC1zfosq42OwW73I"
					},
					 {
					"name": "14. Recurso.url",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1qaamEWfHcTFNIJ1vQx_sH63C5lJGiJ1k/1-XgtJwzCWVaSaRcBOCR4rdcWGcBA08w-",
					"filename": "14. Recurso",
					"extension": "url",
					"timestamp": 1559247880,
					"mimetype": "text/x-url",
					"size": 139,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1qaamEWfHcTFNIJ1vQx_sH63C5lJGiJ1k",
					"basename": "1-XgtJwzCWVaSaRcBOCR4rdcWGcBA08w-"
					},
					 {
					"name": "14. Como Explorar y navegar entre rutas del sistema.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1qaamEWfHcTFNIJ1vQx_sH63C5lJGiJ1k/1CGRug0QmxAJhRrWub5i_SjLduY_xfugc",
					"filename": "14. Como Explorar y navegar entre rutas del sistema",
					"extension": "mp4",
					"timestamp": 1559247844,
					"mimetype": "video/mp4",
					"size": 64557369,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1qaamEWfHcTFNIJ1vQx_sH63C5lJGiJ1k",
					"basename": "1CGRug0QmxAJhRrWub5i_SjLduY_xfugc"
					},
					 {
					"name": "18. Gestion y actualizacion de paquetes del VPS con apt.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1qaamEWfHcTFNIJ1vQx_sH63C5lJGiJ1k/1CN0_LGv042LDSbK3W2yiGohbxz-xajSN",
					"filename": "18. Gestion y actualizacion de paquetes del VPS con apt",
					"extension": "mp4",
					"timestamp": 1559248060,
					"mimetype": "video/mp4",
					"size": 71414011,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1qaamEWfHcTFNIJ1vQx_sH63C5lJGiJ1k",
					"basename": "1CN0_LGv042LDSbK3W2yiGohbxz-xajSN"
					},
					 {
					"name": "18. Recurso.url",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1qaamEWfHcTFNIJ1vQx_sH63C5lJGiJ1k/1fpq_IXuA4PjtdjRAM8JOv46xWM3hziJV",
					"filename": "18. Recurso",
					"extension": "url",
					"timestamp": 1559248131,
					"mimetype": "text/x-url",
					"size": 148,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1qaamEWfHcTFNIJ1vQx_sH63C5lJGiJ1k",
					"basename": "1fpq_IXuA4PjtdjRAM8JOv46xWM3hziJV"
					},
					 {
					"name": "19. Administrar procesos en el comando systemctl.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1qaamEWfHcTFNIJ1vQx_sH63C5lJGiJ1k/1PwJwYQiD_GmM8nzKHMZa44kEkzeilY7u",
					"filename": "19. Administrar procesos en el comando systemctl",
					"extension": "mp4",
					"timestamp": 1559248142,
					"mimetype": "video/mp4",
					"size": 66889107,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1qaamEWfHcTFNIJ1vQx_sH63C5lJGiJ1k",
					"basename": "1PwJwYQiD_GmM8nzKHMZa44kEkzeilY7u"
					},
					 {
					"name": "16. Gestion de directorios (crear, eliminar, mover, copiar y mostrar).mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1qaamEWfHcTFNIJ1vQx_sH63C5lJGiJ1k/1ScT6lg2v6oX2ObxVVdyP-5HR1SbjjgBe",
					"filename": "16. Gestion de directorios (crear, eliminar, mover, copiar y mostrar)",
					"extension": "mp4",
					"timestamp": 1559247988,
					"mimetype": "video/mp4",
					"size": 46753451,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1qaamEWfHcTFNIJ1vQx_sH63C5lJGiJ1k",
					"basename": "1ScT6lg2v6oX2ObxVVdyP-5HR1SbjjgBe"
					},
					 {
					"name": "17. Recurso.url",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1qaamEWfHcTFNIJ1vQx_sH63C5lJGiJ1k/1Sq1tnAYxzlqAqFUosLB7l3q_DIEkMWTM",
					"filename": "17. Recurso",
					"extension": "url",
					"timestamp": 1559248045,
					"mimetype": "text/x-url",
					"size": 141,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1qaamEWfHcTFNIJ1vQx_sH63C5lJGiJ1k",
					"basename": "1Sq1tnAYxzlqAqFUosLB7l3q_DIEkMWTM"
					},
					 {
					"name": "17. Trucos para ser agil en la linea de comandos.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1qaamEWfHcTFNIJ1vQx_sH63C5lJGiJ1k/1sWdQGLIXL8cmuTmbQNFuDt-5m7bdSnIX",
					"filename": "17. Trucos para ser agil en la linea de comandos",
					"extension": "mp4",
					"timestamp": 1559248021,
					"mimetype": "video/mp4",
					"size": 33667511,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1qaamEWfHcTFNIJ1vQx_sH63C5lJGiJ1k",
					"basename": "1sWdQGLIXL8cmuTmbQNFuDt-5m7bdSnIX"
					},
					 {
					"name": "20. Como reiniciar el servidor cuando sea requerido.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1qaamEWfHcTFNIJ1vQx_sH63C5lJGiJ1k/1xgVdo-rD7PfTEgg_cOD_vu8T1_DjbL3Z",
					"filename": "20. Como reiniciar el servidor cuando sea requerido",
					"extension": "mp4",
					"timestamp": 1559248183,
					"mimetype": "video/mp4",
					"size": 43164981,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1qaamEWfHcTFNIJ1vQx_sH63C5lJGiJ1k",
					"basename": "1xgVdo-rD7PfTEgg_cOD_vu8T1_DjbL3Z"
					},
					 {
					"name": "15. Gestion de archivos (crear, eliminar, mover, copiar y monstrar).mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1qaamEWfHcTFNIJ1vQx_sH63C5lJGiJ1k/1Xv5f26DjQgZ8B2gGdSi3fwigVuI4InUg",
					"filename": "15. Gestion de archivos (crear, eliminar, mover, copiar y monstrar)",
					"extension": "mp4",
					"timestamp": 1559247952,
					"mimetype": "video/mp4",
					"size": 55488069,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1qaamEWfHcTFNIJ1vQx_sH63C5lJGiJ1k",
					"basename": "1Xv5f26DjQgZ8B2gGdSi3fwigVuI4InUg"
					},
					 {
					"name": "19. Recurso.url",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1qaamEWfHcTFNIJ1vQx_sH63C5lJGiJ1k/1Xvf5QMLAiB0jGDn2IuvRkqg8LuJ4gYwa",
					"filename": "19. Recurso",
					"extension": "url",
					"timestamp": 1559248170,
					"mimetype": "text/x-url",
					"size": 148,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1qaamEWfHcTFNIJ1vQx_sH63C5lJGiJ1k",
					"basename": "1Xvf5QMLAiB0jGDn2IuvRkqg8LuJ4gYwa"
					},
					 {
					"name": "47. Habilitando compresion en Nginx con Gzip.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1ULknlT8OwuVAik0djKZGv_QpY9TNqL5p/1-fS4DOmaNq-looPy0YUyGfUaSxxpfUud",
					"filename": "47. Habilitando compresion en Nginx con Gzip",
					"extension": "mp4",
					"timestamp": 1559249928,
					"mimetype": "video/mp4",
					"size": 22712357,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1ULknlT8OwuVAik0djKZGv_QpY9TNqL5p",
					"basename": "1-fS4DOmaNq-looPy0YUyGfUaSxxpfUud"
					},
					 {
					"name": "48. Mitigando-los-ataques-DoS-y-DDoS-en-Nginx.txt",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1ULknlT8OwuVAik0djKZGv_QpY9TNqL5p/14AhESGJ_K2Hxffz4ZC6RdNbRhFmE7ocP",
					"filename": "48. Mitigando-los-ataques-DoS-y-DDoS-en-Nginx",
					"extension": "txt",
					"timestamp": 1559249998,
					"mimetype": "text/plain",
					"size": 1157,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1ULknlT8OwuVAik0djKZGv_QpY9TNqL5p",
					"basename": "14AhESGJ_K2Hxffz4ZC6RdNbRhFmE7ocP"
					},
					{
					"name": "45. Evitando ataques de confusion de tipos MIME en Nginx.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1ULknlT8OwuVAik0djKZGv_QpY9TNqL5p/19gow6tDw8Vogv8kzUQUlvtUirwkrSZ_N",
					"filename": "45. Evitando ataques de confusion de tipos MIME en Nginx",
					"extension": "mp4",
					"timestamp": 1559249876,
					"mimetype": "video/mp4",
					"size": 47438212,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1ULknlT8OwuVAik0djKZGv_QpY9TNqL5p",
					"basename": "19gow6tDw8Vogv8kzUQUlvtUirwkrSZ_N"
					},
					 {
					"name": "48. Mitigando los ataques Dos YDDos en Nginx.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1ULknlT8OwuVAik0djKZGv_QpY9TNqL5p/1BHq32Q4btINgV7n2bKacZIocWZFAy112",
					"filename": "48. Mitigando los ataques Dos YDDos en Nginx",
					"extension": "mp4",
					"timestamp": 1559249972,
					"mimetype": "video/mp4",
					"size": 69008075,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1ULknlT8OwuVAik0djKZGv_QpY9TNqL5p",
					"basename": "1BHq32Q4btINgV7n2bKacZIocWZFAy112"
					},
					 {
					"name": "42. Impidiendo el acceso a los archivos .htaccess y . git.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1ULknlT8OwuVAik0djKZGv_QpY9TNqL5p/1LEJk0gv_vkC20n5u0T41219ex7AhzS7B",
					"filename": "42. Impidiendo el acceso a los archivos .htaccess y . git",
					"extension": "mp4",
					"timestamp": 1559249473,
					"mimetype": "video/mp4",
					"size": 43409635,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1ULknlT8OwuVAik0djKZGv_QpY9TNqL5p",
					"basename": "1LEJk0gv_vkC20n5u0T41219ex7AhzS7B"
					},
					 {
					"name": "44. Evitando clickjacking en los sitios de Nginx.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1ULknlT8OwuVAik0djKZGv_QpY9TNqL5p/1mhEvJNsQv6xwGaBLkwjMEwwMoCdYdu5t",
					"filename": "44. Evitando clickjacking en los sitios de Nginx",
					"extension": "mp4",
					"timestamp": 1559249582,
					"mimetype": "video/mp4",
					"size": 30617907,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1ULknlT8OwuVAik0djKZGv_QpY9TNqL5p",
					"basename": "1mhEvJNsQv6xwGaBLkwjMEwwMoCdYdu5t"
					},
					 {
					"name": "49. Evitando que los sitios de Nginx sean --secuestrados--.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1ULknlT8OwuVAik0djKZGv_QpY9TNqL5p/1MxoiN18BrIlqckzFYQGh7yLFwK77VOq4",
					"filename": "49. Evitando que los sitios de Nginx sean --secuestrados--",
					"extension": "mp4",
					"timestamp": 1559250029,
					"mimetype": "video/mp4",
					"size": 35226877,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1ULknlT8OwuVAik0djKZGv_QpY9TNqL5p",
					"basename": "1MxoiN18BrIlqckzFYQGh7yLFwK77VOq4"
					},
					 {
					"name": "46. Evitando ataques XSS en los sitios de Nginx.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1ULknlT8OwuVAik0djKZGv_QpY9TNqL5p/1Si4UnJIvv3HL6FUZW_eewMIxvQs01R6s",
					"filename": "46. Evitando ataques XSS en los sitios de Nginx",
					"extension": "mp4",
					"timestamp": 1559249903,
					"mimetype": "video/mp4",
					"size": 44314296,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1ULknlT8OwuVAik0djKZGv_QpY9TNqL5p",
					"basename": "1Si4UnJIvv3HL6FUZW_eewMIxvQs01R6s"
					},
					 {
					"name": "43. Ocultando la firma de Nginx en las respuestas.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1ULknlT8OwuVAik0djKZGv_QpY9TNqL5p/1VvarVgtih6RMnPIo1YUb4PQeIVHBH5m8",
					"filename": "43. Ocultando la firma de Nginx en las respuestas",
					"extension": "mp4",
					"timestamp": 1559249504,
					"mimetype": "video/mp4",
					"size": 17727037,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1ULknlT8OwuVAik0djKZGv_QpY9TNqL5p",
					"basename": "1VvarVgtih6RMnPIo1YUb4PQeIVHBH5m8"
					},
					 {
					"name": "75. Recurso.url",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1wjTLqFcpWbKLTXCt_MBn5B7GeBbGegyD/17b8AVK8naIGoD6xDeQK8P50wwoiRAsSc",
					"filename": "75. Recurso",
					"extension": "url",
					"timestamp": 1559253786,
					"mimetype": "text/x-url",
					"size": 120,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1wjTLqFcpWbKLTXCt_MBn5B7GeBbGegyD",
					"basename": "17b8AVK8naIGoD6xDeQK8P50wwoiRAsSc"
					},
					 {
					"name": "73. Recuerda mantener tu vps actualizado.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1wjTLqFcpWbKLTXCt_MBn5B7GeBbGegyD/1Ly95rZxH8FyVhimDjA5Cw-q7cFPQ1L9j",
					"filename": "73. Recuerda mantener tu vps actualizado",
					"extension": "mp4",
					"timestamp": 1559253883,
					"mimetype": "video/mp4",
					"size": 75941687,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1wjTLqFcpWbKLTXCt_MBn5B7GeBbGegyD",
					"basename": "1Ly95rZxH8FyVhimDjA5Cw-q7cFPQ1L9j"
					},
					 {
					"name": "74. Aplica lo aprendido en lo que necesites hacer en tu VPS.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1wjTLqFcpWbKLTXCt_MBn5B7GeBbGegyD/1xCikpwhZcyaFRX2aTp9XzUZ6l2gWlM_m",
					"filename": "74. Aplica lo aprendido en lo que necesites hacer en tu VPS",
					"extension": "mp4",
					"timestamp": 1559253742,
					"mimetype": "video/mp4",
					"size": 44509550,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1wjTLqFcpWbKLTXCt_MBn5B7GeBbGegyD",
					"basename": "1xCikpwhZcyaFRX2aTp9XzUZ6l2gWlM_m"
					},
					 {
					"name": "75. Prueba DigitalOcean sin tener que pagar.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1wjTLqFcpWbKLTXCt_MBn5B7GeBbGegyD/1XENk3ErX9yw-gHSz3erkB0w36xKqr0Wu",
					"filename": "75. Prueba DigitalOcean sin tener que pagar",
					"extension": "mp4",
					"timestamp": 1559254018,
					"mimetype": "video/mp4",
					"size": 43800792,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1wjTLqFcpWbKLTXCt_MBn5B7GeBbGegyD",
					"basename": "1XENk3ErX9yw-gHSz3erkB0w36xKqr0Wu"
					},
					{
					"name": "3. Porque un VPS.url",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1XIF04bcJxmkfzXIJ260SYlIegZKILmso/1_0-JRMhO5bATt78aXDuSarGSZZWM5fMX",
					"filename": "3. Porque un VPS",
					"extension": "url",
					"timestamp": 1578692488,
					"mimetype": "text/x-url",
					"size": 150,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1XIF04bcJxmkfzXIJ260SYlIegZKILmso",
					"basename": "1_0-JRMhO5bATt78aXDuSarGSZZWM5fMX"
					},
					 {
					"name": "2. Que haras y que aprenderas.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1XIF04bcJxmkfzXIJ260SYlIegZKILmso/1mwGrpRafmk_l6Gn0cmJNA7xvdzw2K7AC",
					"filename": "2. Que haras y que aprenderas",
					"extension": "mp4",
					"timestamp": 1559246650,
					"mimetype": "video/mp4",
					"size": 83405801,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1XIF04bcJxmkfzXIJ260SYlIegZKILmso",
					"basename": "1mwGrpRafmk_l6Gn0cmJNA7xvdzw2K7AC"
					},
					 {
					"name": "1. Acerca del instructor.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1XIF04bcJxmkfzXIJ260SYlIegZKILmso/1QThMX2jPHEQJtYvMHnJcvFfzVBrhQB7g",
					"filename": "1. Acerca del instructor",
					"extension": "mp4",
					"timestamp": 1559246165,
					"mimetype": "video/mp4",
					"size": 45179159,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1XIF04bcJxmkfzXIJ260SYlIegZKILmso",
					"basename": "1QThMX2jPHEQJtYvMHnJcvFfzVBrhQB7g"
					},
					{
					"name": "37. Crea usuarios de Mysql para cada proyecto del VPS.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1ZsyVHtTKwGY6TF0BWWylfSZZcd8xSOmM/12QQTAwYFhqj01R6RWPxm05y3OJn85SHN",
					"filename": "37. Crea usuarios de Mysql para cada proyecto del VPS",
					"extension": "mp4",
					"timestamp": 1559249264,
					"mimetype": "video/mp4",
					"size": 50154172,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1ZsyVHtTKwGY6TF0BWWylfSZZcd8xSOmM",
					"basename": "12QQTAwYFhqj01R6RWPxm05y3OJn85SHN"
					},
					{
					"name": "34. Instalando el servidor de Mysql o MariaDB en el VPS.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1ZsyVHtTKwGY6TF0BWWylfSZZcd8xSOmM/1D4IxVJEXKnM2-GeX58dQ7jRg1uvRQufm",
					"filename": "34. Instalando el servidor de Mysql o MariaDB en el VPS",
					"extension": "mp4",
					"timestamp": 1559249159,
					"mimetype": "video/mp4",
					"size": 46719473,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1ZsyVHtTKwGY6TF0BWWylfSZZcd8xSOmM",
					"basename": "1D4IxVJEXKnM2-GeX58dQ7jRg1uvRQufm"
					},
					{
					"name": "35. Como interactuar con mysql o mariadb desde la consola del VPS.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1ZsyVHtTKwGY6TF0BWWylfSZZcd8xSOmM/1dDIWLdZjUn3AuXhAwCl-tyl1SsRUTx2d",
					"filename": "35. Como interactuar con mysql o mariadb desde la consola del VPS",
					"extension": "mp4",
					"timestamp": 1559249194,
					"mimetype": "video/mp4",
					"size": 24781200,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1ZsyVHtTKwGY6TF0BWWylfSZZcd8xSOmM",
					"basename": "1dDIWLdZjUn3AuXhAwCl-tyl1SsRUTx2d"
					},
					 {
					"name": "36. Asegurando la instalacion de Mysql o MariaDB en Ubuntu.mp4",
					"type": "file",
					"path": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1ZsyVHtTKwGY6TF0BWWylfSZZcd8xSOmM/1E3vtOl9JcED106ArgfwLTmo2Ych_Marm",
					"filename": "36. Asegurando la instalacion de Mysql o MariaDB en Ubuntu",
					"extension": "mp4",
					"timestamp": 1559249225,
					"mimetype": "video/mp4",
					"size": 41070461,
					"dirname": "1KaQnLciIp9k_35WGpv2HvW42xc1FEFoQ/1ZsyVHtTKwGY6TF0BWWylfSZZcd8xSOmM",
					"basename": "1E3vtOl9JcED106ArgfwLTmo2Ych_Marm"
					}
					]', true);










       		$course = Course::create([
            	'name' => "VPS Seguro en Ubuntu 18.04 con Letsencrypt Nginx PHP y MYSQL",
            	'image' => 'assets/images/coverBig.jpg'

        	]);
       		User::find(1)->courses()->save($course);

       		$i=0;
        	foreach ($modules as $module){
        		$i++;
        		$moduleDB = $course->modules()->create([
                    'course_id' => $course->id,
                    'position' => $i,
                    'name' => $module['name']
                ]);

				$Module_documents = collect($lessons)->whereIn('dirname', $module['path'])->whereIn('extension', 'mp4')->sortBy('name');

				$ii=0;
       	   		foreach($Module_documents as $lesson)
                {
                	$ii++;
                    $lessonDB = $moduleDB->lessons()->create([
                        'name' => $lesson['name'],
                        'module_id' => $moduleDB->id,
                        'position' => $ii,
                        'videourl' => $lesson['basename'],
                        'videodriver' => 'gdrive',
                    ]);
                }

       	   }


       	}




}
