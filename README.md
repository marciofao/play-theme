![Screenshot](https://github.com/Buildbox-ItSolutions/wordpress-developer-challenge/blob/main/wp-content/themes/desafio-wp/screenshot.png?raw=true)

# Play: Tema Wordpress

## Descrição do tema

Tema WordPress para plataforma de vídeos estilo Netflix/globoplay.  

### Recursos
Fornece 3 templates diferentes:
-  **Home**: contem o último vídeo publicado em destaque; e carrosséis horizontais para cada termo na taxonomia criada.
-  **Arquivo**: página de arquivo da taxonomia, que exibe todos os vídeos na mesma.
-  **Single**: página de detalhe de um vídeo e embed do YouTube.

Baseado no seguinte protótipo: [Desktop](https://xd.adobe.com/view/4ef93bf1-8b2a-4d9f-8dc1-38bb056538ff-1baa/specs) e [Mobile](https://xd.adobe.com/view/736a1c45-d953-4fda-9e02-3c86d2a0047b-2639/specs).

### Funcionamento

-  Cria um custom post type para os vídeos, registrada como `video`;
-  Cria uma taxonomia customizada para segmentar os vídeos (`video_type`) em 3 diferentes termos: Filmes, Documentários e Séries;
-  Todo o conteúdo é carregado dinamicamente, como Título, Imagem de Capa, Descrição, Tempo de Duração, Sinopse e Embed de Vídeo.
   -  Todas essas informações devem são editáveis na edição do post do vídeo no painel administrativo;
   -  Tempo de Duração: número (registrado como meta dado `bx_play_video_duration`)
   -  Embed de Vídeo: URL do YouTube (registrado como meta dado `bx_play_video_ID`).

### Frontend

-  Utiliza Tailwind.

### Backend
Utiliza os seguintes plugins que precisam estar instalados para funcionamento conjunto:
-  [Advanced Custom Fields](https://wordpress.org/plugins/advanced-custom-fields/)
-  [Custom Post Type UI](https://br.wordpress.org/plugins/custom-post-type-ui/)
