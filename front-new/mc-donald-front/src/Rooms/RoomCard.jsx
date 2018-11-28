import React from 'react';

const RoomCard = (props) => {
    return ( 
        <div className={props.availability === "true" ? "card has-background-success" : "card has-background-danger"}>
            <div className="card-content">
                <p className="title has-text-white has-text-centered">{props.id}</p>
                <p className="subtitle is-size-5-mobile has-text-white has-text-centered">{props.availability === "true" ? 'Disponible' : 'Ocupada'}</p>
                {props.availability === "false" ? <p className="has-text-centered has-text-white">Niños en cuarto:</p> : ""}
                <p className="subtitle is-size-6 has-text-white has-text-centered">{props.child ? props.child.slice(0,22) + (props.child.length > 22 ? '...' : ' ') :  "Haz click para hacer check-in"}</p>
            </div>
        </div>
    );
}
 
export default RoomCard;