import React, { Component } from 'react';
import TitleCardComponent from './cards/TitleCardComponent';
import RoomCard from './cards/RoomCardComponent';


class RoomComponent extends Component {
    state = { 
        rooms: [
            {id: "01", availability: false},
            {id: "02", availability: false},
            {id: "03", availability: true},
            {id: "04", availability: false},
            {id: "05", availability: true},
            {id: "06", availability: false},
            {id: "07", availability: true},
            {id: "08", availability: false},
            {id: "09", availability: false},
            {id: "10", availability: false},
            {id: "11", availability: true},
            {id: "12", availability: false},
            {id: "13", availability: true},
            {id: "14", availability: false},
            {id: "15", availability: true},
            {id: "16", availability: false},
            {id: "17", availability: false},
            {id: "18", availability: false},
            {id: "19", availability: true},
            {id: "20", availability: false},
            {id: "21", availability: true},
            {id: "22", availability: false},
            {id: "23", availability: true},
            {id: "24", availability: false},
            {id: "25", availability: false},
            {id: "26", availability: false},
            {id: "27", availability: true},
            {id: "28", availability: false},
            {id: "29", availability: true},
            {id: "30", availability: false},
            {id: "31", availability: true},
            {id: "32", availability: false},
        ]
    }

    renderRooms(){
        return(
            this.state.rooms.map(room =>
                <div className="column is-2-desktop is-6-mobile">
                    <RoomCard name={room.id} available={room.availability}/>
                </div>
            )
        )
    }

    render() { 
        return ( 
        <div>
            <div className="margin-top">
                <TitleCardComponent title="Habitaciones" background="link"/>
            </div>
            <br/>
            <div className="columns is-multiline is-mobile">
                {this.renderRooms()}
            </div>
        </div>
        );
    }
}
 
export default RoomComponent;