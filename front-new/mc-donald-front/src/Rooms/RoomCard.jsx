import React from 'react';

const RoomCard = (props) => {
    return ( 
        <div className={props.availability === "true" ? "card has-background-success" : "card has-background-danger"}>
            <div className="card-content">
                <p className="title has-text-white has-text-centered">{props.id}</p>
                <p className="subtitle has-text-white has-text-centered">{props.availability === "true" ? 'Disponible' : 'Ocupada'}</p>
                <p className="subtitle has-text-white has-text-centered">{props.child ? props.child : "Haz click para hacer check-in"}</p>
            </div>
        </div>
    );
}
 
export default RoomCard;