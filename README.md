# Locale do Laravel-8.x para pt-PT
## 1 - Modo de instalação

  1. Clonar para a pasta `resources/lang/`
  ```
  $ cd resources/lang/
  $ git clone https://github.com/tiaguardado/Laravel-8.x-locale-pt-PT.git
  ```  
  
  Pode remover a pasta .git e a pasta en (locale en).
  ```
  $ rm -r .git/
$ rm -r en/
```
  
  2. Configurar o Laravel para utilizar a linguagem PT por omissão	
```
//Linha 96 do ficheiro config/app.php
  'locale' => 'pt',
 
//Pode aplicar 'en' no Fallback (opcional)
//Linha 109 do ficheiro config/app.php
  'fallback_locale' => 'en',
 ```

## 2 - Modo de instalação

  1. Copiar `pt/` para dentro de `resources/lang/`
  ```
  $ cp pt/ resources/lang/
  ```   
  
  2. Configurar o Laravel para utilizar a linguagem PT por omissão	
```
//Linha 96 do ficheiro config/app.php
  'locale' => 'pt',
 ```
	
Made by: Tiago Guardado
