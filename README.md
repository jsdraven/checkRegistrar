Check Registrar
==============

A custom check registrar balancing app with features to build a buffer and savings no matter the budget.
Below is a list of primary features I plan on putting into this projects as more come I will add them in as well.

Features
=========
1)	Support for calendar output. Allowing you to see into the future how much from a previous check you would have to stretch across that pay period. To make this work I will need to take into account repeat bills and known due dates. I will use a mean of past total due to predict about how much it could be. I should also add a tracker to input average flux in cost. Like PGE does very at my house +/- $20. This will allow me to give best / worse case output to calendar.
2)	I will want it useable on my mobile, and at work.
3)	I will want email and text notices when certain triggers happen.
4)	Reports for a verity of things.
5)	I will try to implement an importance measure based on 3 categories.
6)	A form for emergency expense calculations. It will be input numbers only. No need to submit. And the resulting output will be a change in text styling of the inputted number. Green for possible and red for not at all.
a.	This will use Ajax to calculate the inputted number against the actual balance aka the cash cushion or buffer.
7)  Take anual bills and break them up into 12 month fees.
8) deposit reports. within the bill pay report have a breakout that tells you how much to move into savings and or other accounts for safe keeping.

Tables and fields
----------------------
1)	Venders -
a.	Name
b.	Account number for note in check (maybe. I may want to keep this more general than detailed on every aspect.)
c.	Due date
d.	Late fees
e.	Notes
f.	Importance
2)	Accounts receivable - 
a.	Who
b.	When
c.	Interval
d.	How much
3)	Pay plan aka planed budget
a.	Who will be paid
b.	How much
c.	When
d.	Late fees if any
4)	Practical budget (what really happened.) -
a.	Who was paid
b.	How much
c.	When
d.	Late fees if any
5)	Actual account registrar
a.	Balance after last transaction
b.	As of when
c.	Credit transaction ID
d.	Debit transaction ID
e.	Matching admitted balance ID
f.  Account ID.
6)	Admitted Balance (this will be the balance shown to the user minus the potential buffer created by the rounding process of the credit and debit transactions.)
a.	Balance after last transaction
b.	As of when
c.	Credit transaction ID
d.	Debit transaction ID
e.	Matching Actual registrar ID
f.  account ID
7)  Accounts (checking / credit)
a.  name
b.  Type
c.  balance
d.  fees
8)	A systems log that tracks all db transactions.
