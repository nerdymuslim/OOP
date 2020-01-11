<?php

//Calculate the Employee Salary

class Employee
{
    public $id;
    public $name;
    public $workingHoursPerDay = 8;
    public $hourlyRate = 15;
    public $totalLeaveTaken;
    public $workingDays;
    public function __construct(int $id, string $name, int $totalLeaveTaken, int $workingDays)
    {
        $id = $this->id;
        $name = $this->name;
        $totalLeaveTaken = $this->totalLeaveTaken;
        $workingDays = $this->workingDays;
    }
    function getSalaryAmount($totalDays): int
    {
        $this->workingDays = $totalDays - $this->totalLeaveTaken;
        $salary = $this->workingDays * $this->hourlyRate;
        return $salary;
    }
}
$emp1 = new Employee(101, "Elias Durosinmi", 2, 233);

$salary = $emp1->getSalaryAmount(365);
echo "Your salary is $$salary" . PHP_EOL;
