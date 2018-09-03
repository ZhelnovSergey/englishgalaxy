<HTML>
	<? include "header.php" ?>

	<BODY>
		<SCRIPT type="text/javascript">
			var TaskArray = 
			[
				['Я понимаю',									'I understand'						],
				['Я понимаю тебя',								'I understand you'					],
				['Я понимаю это',								'I understand it'					],
				['Я понимаю тебя очень хорошо ',				'I understand you very well'		],
				['Я понимаю это очень хорошо ',					'I understand it very well'			],
				['Я понимаю этот урок',							'I understand this lesson'			],
				['Я понимаю этот урок очень хорошо',			'I understand this lesson very well'],
				['Я понимаю это видео',							'I understand this video'			],
				['Я вижу',										'I see'								],
				['Я вижу это',									'I see it'							],
				['Я вижу тебя',									'I see you'							],
				['Я вижу свой прогресс',						'I see my progress'					],
				['Я вижу этот прогресс',						'I see this progress'				],
				['Я работаю ',									'I work '							],
				['Я работаю здесь',								'I work here'						],
				['Я работаю там',								'I work there'						],
				['Я работаю в этом месте',						'I work in this place'				],
				['Я изучаю здесь',								'I study here'						],
				['Я учусь там',									'I study there'						],
				['Я учусь в этом месте',						'I study in this place'				],
				['Я учусь в школе',								'I study at school'					],
				['Я учусь в университете',						'I study at university'				],
				['Я живу здесь',								'I live here'						],
				['Я живу там',									'I live there'						],
				['Я живу в этом месте',							'I live in this place'				],
				['Я живу в Москве',								'I live in Moscow'					],
				['Я действительно хочу это',					'I really want it'					],
				['Я действительно понимаю это',					'I really understand it'			],
				['Я действительно понимаю тебя',				'I really understand you'			],
				['Я действительно понимаю этот урок',			'I really understand this lesson'	],
				['Я смотрю этот канал',							'I watch this channel'				],
				['Я смотрю этот канал каждый день',				'I watch this channel every day'	],
				['Мне нравится этот урок',						'I like this lesson'				],
				['Мне нравится это видео',						'I like this video'					],
				['Мне нравится этот метод',						'I like this method'				],
				['Мне нравится этот канал',						'I like this channel'				],
				['Я вижу свои результаты',						'I see my results'					],
				['Я действительно вижу свои результаты',		'I really see my results'			],
				['Я говорю по-английски',						'I speak English'					],
				['Я понимаю английский',						'I understand English'				],
				['Я действительно говорю по-английски',			'I really speak English'			],
				['Я действительно понимаю английский',			'I really understand English'		],
				['Мне действительно  нравится этот урок',		'I really like this lesson'			],
				['Мне действительно  нравится это видео',		'I really like this video'			],
				['Мне действительно нравится этот метод',		'I really like this method'			],
				['Мне действительно нравится этот канал',		'I really like this channel'		],
				['Мне нравится этот результат',					'I like this result'				],
				['Мне действительно нравится этот результат',	'I really like this result'			]
			];
		</script>
		
		
		<DIV class="left-column">
			<?php include "menu.php"; ?>
		</div>
		

		
		<DIV class="main">
			<h2 class="title">Урок 1</h2>
			
			<BR>
			<CENTER>
				<iframe align="middle" class="youtube-video"
					src="https://www.youtube.com/embed/_143-bxBD3o">
				</iframe>
			</center>
			
			<BR>
			<HR>

			
			<BR><BR>
			<h2 class="title">Упражнения на перевод</h2>
			
			
				<SCRIPT type="text/javascript">
				function CheckAnswer(id)
				{
					if (document.getElementById('Test1_Answer' + id).value == TaskArray[id][1])
					{			
						alert(document.getElementById('answer_' + id).lastChild().nodeName);
				
						var newIMG		= document.createElement('IMG');
						newIMG.src		='yes.jpg';
						
						answer_0.appendChild(newIMG);
					}
					else
						alert('Fail');
				}
				
				max_len = 0;
				for (i = 0;i < 48;i++ )
				{
					if (max_len < TaskArray[i][0].length)
						max_len = TaskArray[i][0].length;
				}
				
				document.write('<TABLE>\r\n');
				for (i = 0;i < 48;i++ )
				{					
					document.write('<TR>\r\n');
					document.write('	<TD>\r\n');
					document.write('	' + TaskArray[i][0] + '\r\n');
					document.write('	</td>\r\n');
					document.write('	<TD style="background: white" id=answer_' + i +'>\r\n');
					document.write('		<INPUT type="text" id="Test1_Answer' + i + '">\r\n');
					document.write('		<INPUT type="button" value="Check" onclick="CheckAnswer(' + i + ')">\r\n');
					/*document.write('		<IMG src="yes.jpg">\r\n');*/
					document.write('	</td>\r\n');
					document.write('</tr>\r\n');
				}
				
				document.write('</table>\r\n');
			
				</script>
				
				
				
			
		</div>
				
		
	</body>
</html>
