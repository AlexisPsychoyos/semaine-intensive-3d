using UnityEngine;
using System.Collections;

public class CheckPoint : MonoBehaviour {

    // private Vector3 position = new Vector3(886.5f, 101.9f, 856.6f);
    private Vector3 position = new Vector3(0,0,0);
	private Quaternion myRotation = new Quaternion(0, 0, 0,1);
	public Rigidbody rb;

	void Start ()
	{
		rb = GetComponent<Rigidbody>();
	}
    void Update () {
        if (Input.GetKeyDown(KeyCode.Space))
        {
            transform.position = position;
            transform.rotation = myRotation;
			rb.isKinematic = true;

        }
		rb.isKinematic = false;
    }

    void OnTriggerEnter(Collider other)
    {
		if(other.tag == "Checkpoint")
        {
            //position =  transform.position;
			position = other.transform.position;
			myRotation = other.transform.rotation;

            /*rotation = transform.rotation;*/
        }       

    }
}
