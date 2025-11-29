<?php
/*
namespace is a method in grouping a program in a package. This technique also called as an encapsulation.

why grouping?
- basically php does not allow you to have two classes with similar name. It has no problem when we work on our own. But, not in a team or when the team is getting bigger. The bigger the team, the more classes will be created.
- if we use 3rd party script/library, we must know the class names they're using so that we'll not using the same class names as theirs.  
- when we use composer (package manager) to download scripts made by others from around the world. It will be difficult for us to make a unique class name (its class name is not similar with other classes made by others).
- because of the reasons above, we need namespace technique so that when we make a class with same name,the program still can identify if the name is different.
*/
