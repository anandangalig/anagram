# _Anagram_

#### _Web app that takes in a user inputed word and a potential a list of anagrams, and match it using  php, silex, twig, and tests (phpunit). 09.13.16_

#### By _** Zach Baum Anand Angalig**_


## Description

_The App will correctly recognize the matching anagram from the given list using the letters of the inputted word._


## Setup/Installation Requirements

* _If you wish to view the source code locally on your machine please follow the following steps:_

  +  _1). Navigate to the directory in which you want the titleCase project to reside._

  +  _2). Enter the following command into your terminal:_
        _git clone https://github.com/anandangalig/anagram.git_

  +  _3). Navigate to the titleCase directory, and execute the following command in the terminal:_
          _composer install_

  +  _4). Navigate to the web directory and start your local host by executing the following command in your terminal:_
          _php -S localhost:8000_

  +  _5). Open up the browser of your choice and go to the following url:_
          _http://localhost:8000/_

  +  _6). If you wish to look at the source code, feel free to browse through the files in the titleCase directory_


## Specs

* _A single matching character_
  + _IN:  I & [I]_
  + _OUT: I = I_

  * _A single non-matching character_
    + _IN:  I & [a]_
    + _OUT: I != a_

* _A single compatible word_
  + _IN:  listen & [silent]_
  + _OUT: listen = silent_

  * _A single non-compatible word_
    + _IN:  listen & [orange]_
    + _OUT: listen != orange_

* _A Word with a partially matching anagram_
  + _IN:  low in [slow]_
  + _OUT: "low" is in "slow"_

* _A Word has no partially matching anagram_
  + _IN:  low in [fast]_
  + _OUT: "low" is not "slow"_

  * _Compare a word to multiple potential anagrams_
    + _IN:  low in [slow, below, belt, lower, tangerine]_
    + _OUT: "low" is in "slow, below, and lower"_


## Known Bugs

_None yet_


## Support and Contact Details

_Please feel free to contact us at:_
    _zacharybaum42@gmail.com_
    _anandangalig@gmail.com_

## Technologies Used

* _silex v~2.0_
* _twig v1.24.1_
* _phpunit v5.5._



### License

 _Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE._

Copyright (c) 2016 **_ Zach Baum & Anand Angalig_**
