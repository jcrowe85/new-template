#!/usr/bin/perl

use strict;

print "Content-type: text/html\n\n";
print map{"$_ => $ENV{$_}<br>"} sort keys %ENV;

