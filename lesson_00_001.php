<HTML>
	<? include "header.php" ?>

	<BODY>
		<SCRIPT type="text/javascript">
			var TaskArray = 
			[
				['� �������',									'I understand'						],
				['� ������� ����',								'I understand you'					],
				['� ������� ���',								'I understand it'					],
				['� ������� ���� ����� ������ ',				'I understand you very well'		],
				['� ������� ��� ����� ������ ',					'I understand it very well'			],
				['� ������� ���� ����',							'I understand this lesson'			],
				['� ������� ���� ���� ����� ������',			'I understand this lesson very well'],
				['� ������� ��� �����',							'I understand this video'			],
				['� ����',										'I see'								],
				['� ���� ���',									'I see it'							],
				['� ���� ����',									'I see you'							],
				['� ���� ���� ��������',						'I see my progress'					],
				['� ���� ���� ��������',						'I see this progress'				],
				['� ������� ',									'I work '							],
				['� ������� �����',								'I work here'						],
				['� ������� ���',								'I work there'						],
				['� ������� � ���� �����',						'I work in this place'				],
				['� ������ �����',								'I study here'						],
				['� ����� ���',									'I study there'						],
				['� ����� � ���� �����',						'I study in this place'				],
				['� ����� � �����',								'I study at school'					],
				['� ����� � ������������',						'I study at university'				],
				['� ���� �����',								'I live here'						],
				['� ���� ���',									'I live there'						],
				['� ���� � ���� �����',							'I live in this place'				],
				['� ���� � ������',								'I live in Moscow'					],
				['� ������������� ���� ���',					'I really want it'					],
				['� ������������� ������� ���',					'I really understand it'			],
				['� ������������� ������� ����',				'I really understand you'			],
				['� ������������� ������� ���� ����',			'I really understand this lesson'	],
				['� ������ ���� �����',							'I watch this channel'				],
				['� ������ ���� ����� ������ ����',				'I watch this channel every day'	],
				['��� �������� ���� ����',						'I like this lesson'				],
				['��� �������� ��� �����',						'I like this video'					],
				['��� �������� ���� �����',						'I like this method'				],
				['��� �������� ���� �����',						'I like this channel'				],
				['� ���� ���� ����������',						'I see my results'					],
				['� ������������� ���� ���� ����������',		'I really see my results'			],
				['� ������ ��-���������',						'I speak English'					],
				['� ������� ����������',						'I understand English'				],
				['� ������������� ������ ��-���������',			'I really speak English'			],
				['� ������������� ������� ����������',			'I really understand English'		],
				['��� �������������  �������� ���� ����',		'I really like this lesson'			],
				['��� �������������  �������� ��� �����',		'I really like this video'			],
				['��� ������������� �������� ���� �����',		'I really like this method'			],
				['��� ������������� �������� ���� �����',		'I really like this channel'		],
				['��� �������� ���� ���������',					'I like this result'				],
				['��� ������������� �������� ���� ���������',	'I really like this result'			]
			];
		</script>
		
		
		<DIV class="left-column">
			<?php include "menu.php"; ?>
		</div>
		

		
		<DIV class="main">
			<h2 class="title">���� 1</h2>
			
			<BR>
			<CENTER>
				<iframe align="middle" class="youtube-video"
					src="https://www.youtube.com/embed/_143-bxBD3o">
				</iframe>
			</center>
			
			<BR>
			<HR>

			
			<BR><BR>
			<h2 class="title">���������� �� �������</h2>
			
			
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
