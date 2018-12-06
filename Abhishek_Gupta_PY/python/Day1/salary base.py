#this is my salary calculation
workinghours = input("Enter hours worked > ")
basepay = input("per hour salary(upto 40hours)> ")

#calculation of overtime
normal_working_hours = 40
overtime = workinghours - normal_working_hours
overtime_salary = (basepay)*1.5*(overtime)
normal_salary = (basepay) * (normal_working_hours)
total_salary = overtime_salary + normal_salary


print "total salary is > ", total_salary



    


