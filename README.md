Brainfuck Interpreter in PHP
======
Brainfuck is an esoteric programming language noted for its extreme minimalism. The language consists of only eight simple commands and an instruction pointer.
This is an interpreter for Brainfuck, written in PHP.

## Usage
```shell
$ git clone https://github.com/josso/brainfuck-interpreter-php.git
$ cd brainfuck-interpreter-php
$ php brainfuck.php [filename.b]
```

## Examples

```shell
$ php brainfuck.php examples/helloworld.b
Hello World!
$ php brainfuck.php examples/rot13.b
Hello!
Uryyb!
World^D Jbeyq ^D
$ echo Hello World! | php brainfuck.php examples/rot13.b
Uryyb Jbeyq!
```

## License 
The Brainfuck Interpreter is licensed under The MIT License.

> The MIT License (MIT)
> 
> Copyright (c) 2014 Johan K. Jensen
> 
> Permission is hereby granted, free of charge, to any person obtaining a copy
> of this software and associated documentation files (the "Software"), to deal
> in the Software without restriction, including without limitation the rights
> to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
> copies of the Software, and to permit persons to whom the Software is
> furnished to do so, subject to the following conditions:
> 
> The above copyright notice and this permission notice shall be included in all
> copies or substantial portions of the Software.
> 
> THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
> IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
> FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
> AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
> LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
> OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
> SOFTWARE.

The Hello World-example and the ROT13-example are both from the English Wikipedia on the Brainfuck Language and as such licensed under the [Creative Commons Attribution-ShareAlike License](http://en.wikipedia.org/wiki/Wikipedia:Text_of_Creative_Commons_Attribution-ShareAlike_3.0_Unported_License).

The Fibonacci-example is from [Progopedia.com](http://progopedia.com/example/fibonacci/14/) and is licensed under the [GNU Free Documentation License](http://www.gnu.org/licenses/fdl.html).

## Contact
* Website: [johanjensen.dk](http://johanjensen.dk)
* Twitter: [@johankjensen](https://twitter.com/johankjensen "johankjensen on Twitter")
