#MEASURING BMI

#STORING NAME
Name = raw_input( u"\u0928\u093E\u092E > ")

#STORING HEIGHT
HeightInFoot = input (u"\u0915\u0926 (FOOT) > ")

HeightInInch = input (u"\u0915\u0926 (INCH)> ")

#VALUE OF
oneFoot = 0.3048
oneInch = 0.0254

#calculating proper heigt
Height = (HeightInFoot)*(oneFoot) + (HeightInInch)*(oneInch)

#STORING WEIGHT
WeightInKG = input(u"\u0935\u091C\u0928> ")

#CALCULATING BMI
BMI = (WeightInKG)/(Height**2)

print(u"\u092E\u0947\u0930\u093E \u0928\u093E\u092E {}, \u092E\u0947\u0930\u093E \u0935\u091C\u0928 {}, \u092E\u0947\u0930\u093E \u0915\u0926 {}, \u092E\u0947\u0930\u093E BMI {}.".format(Name,WeightInKG,Height,BMI))

