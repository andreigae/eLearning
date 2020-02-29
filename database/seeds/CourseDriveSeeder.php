
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
	    				"Sección 1 Introduccion al curso",
						"Sección 2 Preparación de tu sistema y algunas herramientas",
						"Sección 3 Creación y preparaciones para el servidor",
						"Sección 4 Usando y comprendiendo algunos comandos esenciales en ubuntu",
						"Sección 5 Asignando una cuenta de usuario adicional para asegurar buen uso del VPS",
						"Sección 6 Estableciendo una capa de seguridad en el servidor VPS",
						"Sección 7 Instalando y configurando Nginx en el VPS",
						"Sección 8 Instalando y configurando MySQL o MariaDB en el VPS",
						"Sección 9 Instalando y configurando PHP en el VPS",
						"Sección 10 Haciendo Nginx y los sitos de VPS Mas Seguros y eficientes",
						"Sección 11 Instalando y configurando herramientas utiles para los proyectos del VPS",
						"Sección 12 Despegar un sitio Wordpress en el VPS",
						"Sección 13 Despegando un proyecto Laravel existente en el VPS",
						"Sección 14 EJERCICIO Despliega un proyecto Laravel existente en el VPS",
						"Sección 15 EJERCICIO Despliega tu propio sitio Wordpress en el VPS",
						"Sección 16 Usando Letsencrypt para establecer Conexiones HTTPS en los sitios del VPS",
						"Sección 17 Conclusiones y recomendaciones"
					]', true);



		$lessons = json_decode('[
								   {
								      "name":"1. Acerca del instructor",
								      "module_id":1,
									  "position":1,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-01/1_Acerca_del_instructor.mp4",
								      "recursos": []
								   },
								   {
								      "name":"2. Que haras y que aprenderas",
								      "module_id":1,
									  "position":2,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-02/2_Que_haras_y_que_aprenderas.mp4",
								       "recursos": []
								   },
								   {
								      "name":"3. Por que es bueno un VPS",
								      "module_id":1,
									  "position":3,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-03/3_Por_que_es_bueno_un_VPS.mp4",
								      "recursos": [
								       		{
									      		"name":"3. Porque un VPS.url",
									      		"type":"url",
									      		"destination":"http://google.com"
								       		}
									   ]
								   },
								   {
								      "name":"4. Creando una cuenta en un proveedor de VPS",
								      "module_id":2,
									  "position":1,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-04/4_Creando_una_cuenta_en_un_proveedor_de_VPS.mp4",
								      "recursos": [
								       		{
									      		"name":"4. Recurso Comparativa.url",
									      		"type":"url",
									      		"destination":"http://google.com"
								       		}
									   ]

								   },
								   {
								      "name":"5. OPCIONAL Crear una cuenta con el proveedor usado durante el curso",
								      "module_id":2,
									  "position":2,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-05/5_OPCIONAL_Crear_una_cuenta_con_el_proveedor_usado_durante_el_curso.mp4",
								      "recursos": [
								       		{
									      		"name":"5. Recurso.url",
									      		"type":"url",
									      		"destination":"http://google.com"
								       		}
									   ]
								   },
								   {
								      "name":"6. Habilitando comandos Linux en Windwos con it y CYGWIN",
								      "module_id":2,
									  "position":3,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-06/6_Habilitando_comandos_Linux_en_Windwos_con_it_y_CYGWIN.mp4",
								      "recursos": [
								       		{
									      		"name":"6. Recurso.url",
									      		"type":"url",
									      		"destination":"http://google.com"
								       		}
									   ]
								   },
								   {
								      "name":"7. Generando llaves SSH para acceder al VPS de forma segura",
								      "module_id":2,
									  "position":4,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-07/7_Generando_llaves_SSH_para_acceder_al_VPS_de_forma_segura.mp4",
								      "recursos": [
								       		{
									      		"name":"7. Recurso 1.url",
									      		"type":"url",
									      		"destination":"http://google.com"
								       		},
								       		{
												"name":"7. Recurso 2.url",
												"type":"url",
												"destination":"http://google.com"
								       		}
									   ]
								   },
								   {
								      "name":"8. Creando tu VPS con Ubuntu 18.04",
								      "module_id":3,
									  "position":1,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-08/8_Creando_tu_VPS_con_Ubuntu_18.04.mp4",
								      "recursos": []
								   },
								   {
								      "name":"9. Conectandose al VPs por medio SSH",
								      "module_id":3,
									  "position":2,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-09/9_Conectandose_al_VPs_por_medio_SSH.mp4",
									  "recursos": [
							  				{
							      				"name":"9. Recurso.url",
							      				"type":"url",
												"destination":"http://google.com"
							   				}
									   	]
								   },

								   {
								      "name":"10. Mejorando el flujo de conexion",
								      "module_id":3,
									  "position":3,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-10/10_Mejorando_el_flujo_de_conexion.mp4",
								      "recursos": [
											{
												"name":"10. Mejorando-el-flujo-de-conexi-n-al-VPS.txt"
											}
								      ]
								   },

								   {
								      "name":"11. Manteniendo la conexion activa con el servidor",
								      "module_id":3,
									  "position":4,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-11/11_Manteniendo_la_conexion_activa_con_el_servidor.mp4",
								      "recursos": [
										 {
								      		"name":"11. Manteniendo-la-conexi-n-activa-con-el-servidor.txt"
								  		 }
								      ]
								   },

								   {
								      "name":"12. Apuntando un docloud existente al servidor VPS",
								      "module_id":3,
									  "position":5,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-12/12_Apuntando_un_dominio_existente_al_servidor_VPS.mp4",
								      "recursos": [
											{
										      "name":"12. Recurso.url",
										      "type":"url",
											  "destination":"http://google.com"
										    }
								      ]
								   },

								   {
								      "name":"13. Apuntando el docloud al DNS de DigitalOcean",
								      "module_id":3,
									  "position":6,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-13/13_Apuntando_el_dominio_al_DNS_de_DigitalOcean.mp4",
								      "recursos": []
								   },
								   {
								      "name":"14. Como Explorar y navegar entre rutas del sistema",
								      "module_id":4,
									  "position":1,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-14/14_Como_Explorar_y_navegar_entre_rutas_del_sistema.mp4",
								      "recursos": [
											{
										      "name":"14. Recurso.url",
										      "type":"url",
											  "destination":"http://google.com"
										    }
								      ]
								   },

								   {
								      "name":"15. Gestion de archivos (crear, eliminar, mover, copiar y monstrar)",
								      "module_id":4,
									  "position":2,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-15/15_Gestion_de_archivos_(crear,_eliminar,_mover,_copiar_y_monstrar).mp4",
								      "recursos": []
								   },
								   {
								      "name":"16. Gestion de directorios (crear, eliminar, mover, copiar y mostrar)",
								      "module_id":4,
									  "position":3,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-16/16_Gestion_de_directorios_(crear,_eliminar,_mover,_copiar_y_mostrar).mp4",
								      "recursos": []
								   },
								   {
								      "name":"17. Trucos para ser agil en la linea de comandos",
								      "module_id":4,
									  "position":4,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-17/17_Trucos_para_ser_agil_en_la_linea_de_comandos.mp4",
								      "recursos": [
											{
										      "name":"17. Recurso.url",
										      "type":"url",
											  "destination":"http://google.com"
										    }
								      ]
								   },

								   {
								      "name":"18. Gestion y actualizacion de paquetes del VPS con apt",
								      "module_id":4,
									  "position":5,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-18/18_Gestion_y_actualizacion_de_paquetes_del_VPS_con_apt.mp4",
								      "recursos": [
											{
										      "name":"18. Recurso.url",
										      "type":"url",
											  "destination":"http://google.com"
										    }
								      ]
								   },

								   {
								      "name":"19. Administrar procesos en el comando systemctl",
								      "module_id":4,
									  "position":6,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-19/19_Administrar_procesos_en_el_comando_systemctl.mp4",
								      "recursos": [
											{
										      "name":"19. Recurso.url",
										      "type":"url",
											  "destination":"http://google.com"
										    }
								      ]
								   },

								   {
								      "name":"20. Como reiniciar el servidor cuando sea requerido",
								      "module_id":4,
									  "position":7,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-20/20_Como_reiniciar_el_servidor_cuando_sea_requerido.mp4",
								      "recursos": []
								   },
								   {
								      "name":"21. Como gestionar cuentas de usuario en Ubuntu",
								      "module_id":5,
									  "position":1,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-21/21_Como_gestionar_cuentas_de_usuario_en_Ubuntu(crear_eli.mp4",
								      "recursos": []
								   },
								   {
								      "name":"22. Como iniciar sesion en el VPS con un nuevo usuario",
								      "module_id":5,
									  "position":2,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-22/22_Como_iniciar_sesion_en_el_VPS_con_un_nuevo_usuario.mp4",
								      "recursos": []
								   },
								   {
								      "name":"23. Asignando y usando permisos administrativos en Ubuntu",
								      "module_id":5,
									  "position":3,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-23/23_Asignando_y_usando_permisos_administrativos_en_Ubuntu.mp4",
								      "recursos": []
								   },
								   {
								      "name":"24. Impidiento el inicio de sesion como root en el VPS",
								      "module_id":6,
									  "position":1,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-24/24_Impidiento_el_inicio_de_sesion_como_root_en_el_VPS.mp4",
								      "recursos": []
								   },
								   {
								      "name":"25. Configurando y usando el firewall UFW de Ubuntu",
								      "module_id":6,
									  "position":2,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-25/25_Configurando_y_usando_el_firewall_UFW_de_Ubuntu.mp4",
								      "recursos": []
								   },
								   {
								      "name":"26. Asignando permisos de forma correcta en Ubuntu",
								      "module_id":6,
									  "position":3,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-26/26_Asignando_permisos_de_forma_correcta_en_Ubuntu.mp4",
								      "recursos": []
								   },
								   {
								      "name":"27. Usando fail2ban para prevenir intrusos en el VPS",
								      "module_id":6,
									  "position":4,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-27/27_Usando_fail2ban_para_prevenir_intrusos_en_el_VPS.mp4",
								      "recursos": []
								   },
								   {
								      "name":"28. Instalando Nginx en el VPS",
								      "module_id":7,
									  "position":1,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-28/28_Instalando_Nginx_en_el_VPS.mp4",
								      "recursos": []
								   },
								   {
								      "name":"29. Permitiendo acceso a los sitios servidos por Nginx",
								      "module_id":7,
									  "position":2,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-29/29_Permitiendo_acceso_a_los_sitios_servidos_por_Nginx.mp4",
								      "recursos": []
								   },
								   {
								      "name":"30. Donde esta Nginx y su configuracion en el VPS",
								      "module_id":7,
									  "position":3,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-30/30_Donde_esta_Nginx_y_su_configuracion_en_el_VPS.mp4",
								      "recursos": []
								   },
								   {
								      "name":"31. Como logra Nginx responder peticiones",
								      "module_id":7,
									  "position":4,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-31/31_Como_logra_Nginx_responder_peticiones.mp4",
								      "recursos": []
								   },
								   {
								      "name":"32. Estableciendo el primer sitio en Nginx",
								      "module_id":7,
									  "position":5,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-32/32_Estableciendo_el_primer_sitio_en_Nginx.mp4",
								      "recursos": []
								   },
								   {
								      "name":"33. Configurando subdoclouds en el VPS con Nginx",
								      "module_id":7,
									  "position":6,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-33/33_Configurando_subdominios_en_el_VPS_con_Nginx.mp4",
								      "recursos": []
								   },
								   {
								      "name":"34. Instalando el servidor de Mysql o MariaDB en el VPS",
								      "module_id":8,
									  "position":1,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-34/34_Instalando_el_servidor_de_Mysql_o_MariaDB_en_el_VPS.mp4",
								      "recursos": []
								   },
								   {
								      "name":"35. Como interactuar con mysql o mariadb desde la consola del VPS",
								      "module_id":8,
									  "position":2,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-35/35_Como_interactuar_con_mysql_o_mariadb_desde_la_consola_del_VPS.mp4",
								      "recursos": []
								   },
								   {
								      "name":"36. Asegurando la instalacion de Mysql o MariaDB en Ubuntu",
								      "module_id":8,
									  "position":3,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-36/36_Asegurando_la_instalacion_de_Mysql_o_MariaDB_en_Ubuntu.mp4",
								      "recursos": []
								   },
								   {
								      "name":"37. Crea usuarios de Mysql para cada proyecto del VPS",
								      "module_id":8,
									  "position":4,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-37/37_Crea_usuarios_de_Mysql_para_cada_proyecto_del_VPS.mp4",
								      "recursos": []
								   },
								   {
								      "name":"38. Instalando PHP FPM (fast Processing Module) en el VPS",
								      "module_id":9,
									  "position":1,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-38/38_Instalando_PHP_FPM_(fast_Processing_Module)_en_el_VPS.mp4",
								      "recursos": []
								   },
								   {
								      "name":"39. Los Archivos y ubicaciones importantes de PHP en Ubuntu",
								      "module_id":9,
									  "position":2,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-39/39_Los_Archivos_y_ubicaciones_importantes_de_PHP_en_Ubuntu.mp4",
								      "recursos": []
								   },
								   {
								      "name":"40. Asegurando la instalacion de php del VPS",
								      "module_id":9,
									  "position":3,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-40/40_Asegurando_la_instalacion_de_php_del_VPS.mp4",
								      "recursos": []
								   },
								   {
								      "name":"41. Enviando peticiones desde Nginx hacia PHP-FPM",
								      "module_id":9,
									  "position":4,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-41/41_Enviando_peticiones_desde_Nginx_hacia_PHP-FPM.mp4",
								      "recursos": [
											{
										      "name":"41. Enviando-peticiones-desde-Nginx-hacia-PHP-FPM.txt"
										    }
								      ]
								   },

								   {
								      "name":"42. Impidiendo el acceso a los archivos .htaccess y . git",
								      "module_id":10,
									  "position":1,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-42/42_Impidiendo_el_acceso_a_los_archivos_.htaccess_y_._git.mp4",
								      "recursos": []
								   },
								   {
								      "name":"43. Ocultando la firma de Nginx en las respuestas",
								      "module_id":10,
									  "position":2,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-43/43_Ocultando_la_firma_de_Nginx_en_las_respuestas.mp4",
								      "recursos": []
								   },
								   {
								      "name":"44. Evitando clickjacking en los sitios de Nginx",
								      "module_id":10,
									  "position":3,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-44/44_Evitando_clickjacking_en_los_sitios_de_Nginx.mp4",
								      "recursos": []
								   },
								   {
								      "name":"45. Evitando ataques de confusion de tipos MIME en Nginx",
								      "module_id":10,
									  "position":4,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-45/45_Evitando_ataques_de_confusion_de_tipos_MIME_en_Nginx.mp4",
								      "recursos": []
								   },
								   {
								      "name":"46. Evitando ataques XSS en los sitios de Nginx",
								      "module_id":10,
									  "position":5,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-46/46_Evitando_ataques_XSS_en_los_sitios_de_Nginx.mp4",
								      "recursos": []
								   },
								   {
								      "name":"47. Habilitando compresion en Nginx con Gzip",
								      "module_id":10,
									  "position":6,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-47/47_Habilitando_compresion_en_Nginx_con_Gzip.mp4",
								      "recursos": [
											{
										      "name":"48. Mitigando-los-ataques-DoS-y-DDoS-en-Nginx.txt"
										    }
								      ]
								   },

								   {
								      "name":"48. Mitigando los ataques Dos YDDos en Nginx",
								      "module_id":10,
									  "position":7,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-48/48_Mitigando_los_ataques_Dos_YDDos_en_Nginx.mp4",
								      "recursos": []
								   },
								   {
								      "name":"49. Evitando que los sitios de Nginx sean -secuestrados-",
								      "module_id":10,
									  "position":8,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-49/49_Evitando_que_los_sitios_de_Nginx_sean_--secuestrados--.mp4",
								      "recursos": []
								   },
								   {
								      "name":"50. Instalar y configurar composer en el VPS",
								      "module_id":11,
									  "position":1,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-50/50_Instalar_y_configurar_composer_en_el_VPS.mp4",
								      "recursos": []
								   },
								   {
								      "name":"51. Preparando el VPS para establecer conexiones SSH",
								      "module_id":11,
									  "position":2,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-51/51_Preparando_el_vPS_para_establecer_conexiones_ssh_ter.mp4",
								      "recursos": []
								   },
								   {
								      "name":"52. Instalando extensiones adicionales de PHP en el VPS",
								      "module_id":11,
									  "position":3,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-52/52_Instalando_extensiones_adicionales_de_PHP_en_el_VPS.mp4",
								      "recursos": []
								   },
								   {
								      "name":"53. Obteniendo la estructura de WordPress en el VPS",
								      "module_id":12,
									  "position":1,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-53/53_Obteniendo_la_estructura_de_WordPress_en_el_VPS.mp4",
								      "recursos": []
								   },
								   {
								      "name":"54. Desplegando e instalando WordPress en el VPS",
								      "module_id":12,
									  "position":2,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-54/54_Desplegando_e_instalando_WordPress_en_el_VPS.mp4",
								      "recursos": []
								   },
								   {
								      "name":"55. Obteniendo un proyecto Laravel desde Github",
								      "module_id":13,
									  "position":1,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-55/55_Obteniendo_un_proyecto_Laravel_desde_Github.mp4",
								      "recursos": []
								   },
								   {
								      "name":"56. Instalando las dependencia de Laravel con Composer",
								      "module_id":13,
									  "position":2,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-56/56_Instalando_las_dependencia_de_Laravel_con_Composer.mp4",
								      "recursos": []
								   },
								   {
								      "name":"57. Preparando Nginx para el proyecto Laravel",
								      "module_id":13,
									  "position":3,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-57/57_Preparando_Nginx_para_el_proyecto_Laravel.mp4",
								      "recursos": []
								   },
								   {
								      "name":"58. Desplegando y configurando Laravel en el VPS",
								      "module_id":13,
									  "position":4,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-58/58_Desplegando_y_configurando_Laravel_en_el_VPS.mp4",
								      "recursos": []
								   },
								   {
								      "name":"59. Obten el proyecto Laravel desde Github",
								      "module_id":14,
									  "position":1,
								      "type":"document",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-59/59_Obten_el_proyecto_Laravel_desde_Github.docx",
								      "recursos": []
								   },
								   {
								      "name":"60. Resuelve las dependencias del proyecto con composer",
								      "module_id":14,
									  "position":2,
								      "type":"document",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-60/60_Resuelve_las_dependencias_del_proyecto_con_composer.docx",
								      "recursos": []
								   },
								   {
								      "name":"61. Configurar el sitio de assets para apuntar a este proyecto",
								      "module_id":14,
									  "position":3,
								      "type":"document",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-61/61_Configurar_el_sitio_de_assets_para_apuntar_a_este_proyecto.docx",
								      "recursos": []
								   },
								   {
								      "name":"62. Despliega y configura el proyecto Laravel",
								      "module_id":14,
									  "position":4,
								      "type":"document",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-62/62_Despliega_y_configura_el_proyecto_Laravel.docx",
								      "recursos": []
								   },
								   {
								      "name":"63. Obten la estructura de WordPress",
								      "module_id":15,
									  "position":1,
								      "type":"document",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-63/63_Obten_la_estructura_de_WordPress.docx",
								      "recursos": []
								   },
								   {
								      "name":"64. Despliega e instala WordPress en el VPS",
								      "module_id":15,
									  "position":2,
								      "type":"document",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-64/64_Despliega_e_instala_WordPress_en_el_VPS.docx",
								      "recursos": []
								   },
								   {
								      "name":"65. Acerca de Letsencrypt y acme.sh como cliente",
								      "module_id":16,
									  "position":1,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-65/65_Acerca_de_Letsencrypt_y_acme.sh_como_cliente.mp4",
								      "recursos": []
								   },
								   {
								      "name":"66. Instalando un cliente liviano de Letsencrypt(acme.sh)",
								      "module_id":16,
									  "position":2,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-66/66_Instalando_un_cliente_liviano_de_Letsencrypt(acme.s.mp4",
								      "recursos": []
								   },
								   {
								      "name":"67. Conociendo el cliente de Letsencrypt y preparando entorno",
								      "module_id":16,
									  "position":3,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-67/67_Conociendo_el_cliente_de_Letsencrypt_y_preparando_v.mp4",
								      "recursos": []
								   },
								   {
								      "name":"68. Usando Letsencrypt para obtener un certificado para el VPS",
								      "module_id":16,
									  "position":4,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-68/68_Usando_Letsencrypt_para_obtener_un_certificado_para.mp4",
								      "recursos": []
								   },
								   {
								      "name":"69. Instalando cada certificado de LEtsencrypt en el VPS",
								      "module_id":16,
									  "position":5,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-69/69_Instalando_cada_certificado_de_LEtsencrypt_en_el_VP.mp4",
								      "recursos": []
								   },
								   {
								      "name":"70. Configurando los sitios de Ngixn para usar HTTPS",
								      "module_id":16,
									  "position":6,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-70/70_Configurando_los_sitios_de_Ngixn_para_usar_HTTPS.mp4",
								      "recursos": []
								   },
								   {
								      "name":"71. Resolviendo un problema con Https y las cabecer seguridad",
								      "module_id":16,
									  "position":7,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-71/71_Resolviendo_un_problema_con_Https_y_las_cabecer_seg.mp4",
								      "recursos": []
								   },
								   {
								      "name":"72. Comprobando la seguridad de los doclouds del VPS",
								      "module_id":16,
									  "position":8,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-72/72_Comprobando_la_seguridad_de_los_dominios_del_VPS.mp4",
								      "recursos": []
								   },
								   {
								      "name":"73. Recuerda mantener tu vps actualizado",
								      "module_id":17,
									  "position":1,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-73/73_Recuerda_mantener_tu_vps_actualizado.mp4",
								      "recursos": []
								   },
								   {
								      "name":"74. Aplica lo aprendido en lo que necesites hacer en tu VPS",
								      "module_id":17,
									  "position":2,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-74/74_Aplica_lo_aprendido_en_lo_que_necesites_hacer_en_tu_VPS.mp4",
								      "recursos": []
								   },
								   {
								      "name":"75. Prueba DigitalOcean sin tener que pagar",
								      "module_id":17,
									  "position":3,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/vps-server/resource-75/75_Prueba_DigitalOcean_sin_tener_que_pagar.mp4",
								      "recursos": []
								   }
								]', true);



       		$course = Course::create([
            	'name' => "VPS Seguro en Ubuntu 18.04 con Letsencrypt Nginx PHP y MYSQL",
            	'image' => 'courses/vps-server/introduction/intro.jpg',
            	'videointro' => 'courses/vps-server/introduction/intro.mp4'

        	]);

       		User::find(1)->courses()->save($course);

       		$modules =  collect($modules);

       		$i=0;
        	foreach ($modules as $module){
        		$i++;
        		$moduleDB = $course->modules()->create([
                    'course_id' => $course->id,
                    'position' => $i,
                    'name' => $module
                ]);

				$Module_documents = collect($lessons)->whereIn('module_id', $i);

       	   		foreach($Module_documents as $lesson)
                {
                    $lessonDB = $moduleDB->lessons()->create([
                        'name' => $lesson['name'],
                        'module_id' => $lesson['module_id'],
                        'type' => $lesson['type'],
                        'position' => $lesson['position'],
                        'videourl' => $lesson['path'],
                        'videodriver' => $lesson['drive'],
                    ]);
                }

       	   }





       	}

}
