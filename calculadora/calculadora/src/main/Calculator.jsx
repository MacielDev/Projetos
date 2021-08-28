import React, { Component } from 'react'
import './Calculator.css'
import Button from '../components/Button'
import Display from'../components/Display'

export default class Calculator extends Component{
    constructor(props){
        super(props)
        
        this.clearMemory = this.clearMemory.bind(this)
        this.setOperation = this.setOperation.bind(this)
        this.addDigit = this.addDigit.bind(this)
    }
    clearMemory(){
        console.log('limpar')
    }
    setOperation(operation){
        console.log(operation)
    }
    addDigit(n){
        console.log(n)
    }
    render(){
        return(
            <div className="calculator">
                <Display value="100"/>
                <Button className="button" label="AC" 
                 click = {this.clearMemory}
                />
                <Button label="9"/>
                <Button label="8"/>
                <Button label="/" click = {this.setOperation}/>
                <Button label="7"/>
                <Button label="6"/>
                <Button label="5"/>
                <Button label="*"/>
                <Button label="4"/>
                <Button label="3"/>
                <Button label="2"/>
                <Button label="-"/>
                <Button label="1"/>
                <Button label="0"/>
                <Button label="."/>
                <Button label="+"/>
                <Button label="="/>
                
            </div>
        )
    }
}